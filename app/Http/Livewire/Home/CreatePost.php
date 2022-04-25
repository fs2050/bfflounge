<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

use App\Client\ClientGuzzle;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\ClientException;

use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use GuzzleHttp\Psr7;

use App\Client\SuggestionClient;
use App\Client\FollowerClient;

use Illuminate\Support\Facades\Storage;

class CreatePost extends Component
{
    use WithFileUploads;

    public $content = '';
    public $medias;


    public function createPost( Request $request )
    {
        $client = new ClientGuzzle( new Client );

        $userID = Session::get( 'user' )->id;

        $user = $client->request( 'GET', "users/$userID" );

        $profile = json_decode( $user->getBody()->getContents() );

        $profile_id = $profile->profiles[0]->id;

        $name          = uniqid( date( 'HisYmd' ) );
        $extension     = $this->medias->getClientOriginalExtension();
        $nameImage     = "{$name}.$extension";

        $upload = $this->medias->storeAs( 'posts', $nameImage  );

        if ( !$upload )
            return dd("Deu ruim!");

        $response = $client->request( 'POST', 'posts', [
            'multipart' => [
                [
                    'name'     => 'profile_id',
                    'contents' => $profile_id
                ],
                [
                    'name'     => 'content',
                    'contents' => $this->content
                ],
                [
                    'name'     => 'medias',
                    'contents' => Psr7\Utils::tryFopen( Storage::path( $upload ), 'r' ),
                    'filename' => $upload,
                ]
            ]
        ]);

        return json_decode( $response->getBody()->getContents() );
    }

    public function like( $idPost )
    {
        $client = new ClientGuzzle( new Client );

        $response = $client->request( 'POST', 'interactions', [
            'form_params' => [
                'type'                  =>  'reaction',
                'content'               =>  'like',
                'interactable[id]'      =>  $idPost,
                'interactable[type]'    =>  'post'
            ]
        ]);

        return json_decode( $response->getBody()->getContents() );
    }

    public function unlike( $idPost )
    {
        $client = new ClientGuzzle( new Client );

        $response = $client->request( 'DELETE', 'interactions', [
            'form_params' => [
                'type'                  => 'comment',
                'content'               =>  'dfdf',
                'interactable[id]'      =>  $idPost,
                'interactable[type]'    => 'post'
            ]
        ]);

        return json_decode( $response->getBody()->getContents() );
    }

    public function commentPost( $idPost )
    {
        dd("Chegou aqui!");
        $client = new ClientGuzzle( new Client );

        $response = $client->request( 'POST', 'interactions', [
            'form_params' => [
                'type'                  => 'comment',
                'content'               =>  $this->content,
                'interactable[id]'      =>  $idPost,
                'interactable[type]'    => 'post'
            ]
        ]);

        return json_decode( $response->getBody()->getContents() );
    }

    public function confirmDeletePost()
    {
        $client = new ClientGuzzle( new Client );

        $response = $client->request( 'POST', 'posts' );

        $posts = json_decode( $response->getBody()->getContents() );

        return $this->clientApi->userDelete( session()->get( 'user' )->id );
    }
    public function render()
    {
        return view('livewire.home.create-post');
    }


}
