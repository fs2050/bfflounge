<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

use App\Client\ClientGuzzle;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\ClientException;

class Home extends Component
{
    public $content = '';


    public function render()
    {
        $client = new ClientGuzzle( new Client );

        $response = $client->request( 'GET', 'posts' );

        $posts = json_decode( $response->getBody()->getContents() );

       return view( 'livewire.home.index', [
            'posts' => $posts->data
        ]);
    }




    public function addPost()
    {
        $client = new ClientGuzzle( new Client );

        $userID = Session::get( 'user' )->id;

        $user = $client->request( 'GET', "users/$userID" );

        $profile = json_decode( $user->getBody()->getContents() );

        $profile_id = $profile->profiles[0]->id;

        $response = $client->request( 'POST', 'posts', [
            'form_params' => [
                'profile_id'    => $profile_id,
                'content'       => $this->content,
            ]
        ]);

        $posts = json_decode( $response->getBody()->getContents() );

    }

    public function confirmDeletePost()
    {
        $client = new ClientGuzzle( new Client );

        $response = $client->request( 'POST', 'posts' );

        $posts = json_decode( $response->getBody()->getContents() );

        $this->clientApi->userDelete(session()->get('user')->id);



    }

} // Home
