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

class ShowPost extends Component
{
    public function render()
    {


        $client = new ClientGuzzle( new Client );

        $response = $client->request( 'GET', 'posts' );

        $posts = json_decode( $response->getBody()->getContents() );

        return view( 'livewire.home.show-post', [
            'posts'         => $posts->data
        ]);

    }
}
