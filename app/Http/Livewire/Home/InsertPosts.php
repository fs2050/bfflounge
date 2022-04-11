<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Client\ClientGuzzle;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\ClientException;

class InsertPosts extends Component
{



    public $profile_id;
    public $author_id;
    public $content;


public function submit()
{
    $client = new ClientGuzzle( new Client );

    $response = $client->request('POST', 'posts',[
        'form_params' => [
            $this->profile_id,
            $this->author_id,
            $this->content,

        ]
    ]);


    $posts = json_decode( $response->getBody()->getContents() );
    //dd($posts);



 }


public function render()
{
      return view('livewire.home.insert-posts');
}

}
