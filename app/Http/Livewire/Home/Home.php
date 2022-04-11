<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

use App\Client\ClientGuzzle;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\ClientException;

class Home extends Component
{

    public function render()
    {
        $client = new ClientGuzzle( new Client );

        $response = $client->request( 'GET', 'posts' );


        $posts = json_decode( $response->getBody()->getContents() );
        dump($posts);

        return view( 'livewire.home.index', [
            'posts' => $posts->data
        ]);
     }


} // Home
