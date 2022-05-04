<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Client\ClientGuzzle;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\ClientException;

class ShowPost extends Component
{
    public $content                 = '';
    public $contentCommentComment   = '';

    public function render()
    {
        $client = new ClientGuzzle( new Client );

        $userID = Session::get( 'user' )->id;

        $user = $client->request( 'GET', "users/$userID" );

        $profile = json_decode( $user->getBody()->getContents() );

        $response = $client->request( 'GET', 'posts' );

        $posts = json_decode( $response->getBody()->getContents() );

        return view( 'livewire.home.show-post', [
            'profile'   => $profile,
            'posts'     => $posts->data
        ]);
    }

    public function likePost( $id )
    {
        $client = new ClientGuzzle( new Client );

        $response = $client->request( 'POST', 'interactions', [
            'form_params' => [
                'type'                  =>  'reaction',
                'content'               =>  'like',
                'interactable[id]'      =>  $id,
                'interactable[type]'    =>  'post'
            ]
        ]);

        return json_decode( $response->getBody()->getContents() );
    }

    public function unlikePost( $id )
    {
        $client = new ClientGuzzle( new Client );

        $response = $client->request( 'DELETE', "interactions/$id/destroy" );

        return json_decode( $response->getBody()->getContents() );
    }

    public function likeComment( $id )
    {
        $client = new ClientGuzzle( new Client );

        $response = $client->request( 'POST', 'interactions', [
            'form_params' => [
                'type'                  =>  'reaction',
                'content'               =>  'like',
                'interactable[id]'      =>  $id,
                'interactable[type]'    =>  'comment'
            ]
        ]);

        return json_decode( $response->getBody()->getContents() );
    }

    public function unlikeComment( $id )
    {
        $client = new ClientGuzzle( new Client );

        $response = $client->request( 'DELETE', "interactions/$id/destroy" );

        return json_decode( $response->getBody()->getContents() );
    }

    public function likeCommentComment( $id )
    {
        $client = new ClientGuzzle( new Client );

        $response = $client->request( 'POST', 'interactions', [
            'form_params' => [
                'type'                  =>  'reaction',
                'content'               =>  'like',
                'interactable[id]'      =>  $id,
                'interactable[type]'    =>  'comment'
            ]
        ]);

        return json_decode( $response->getBody()->getContents() );
    }

    public function unlikeCommentComment( $id )
    {
        $client = new ClientGuzzle( new Client );

        $response = $client->request( 'DELETE', "interactions/$id/destroy" );

        return json_decode( $response->getBody()->getContents() );
    }

    public function commentPost( $id )
    {
        $client = new ClientGuzzle( new Client );

        $response = $client->request( 'POST', 'interactions', [
            'form_params' => [
                'type'                  => 'comment',
                'content'               =>  $this->content,
                'interactable[id]'      =>  $id,
                'interactable[type]'    => 'post'
            ]
        ]);

        json_decode( $response->getBody()->getContents() );

        return redirect()->route( 'home.index' );
    }

    public function commentComment( $id )
    {
        $client = new ClientGuzzle( new Client );

        $response = $client->request( 'POST', 'interactions', [
            'form_params' => [
                'type'                  => 'comment',
                'content'               =>  $this->contentCommentComment,
                'interactable[id]'      =>  $id,
                'interactable[type]'    => 'comment'
            ]
        ]);

        json_decode( $response->getBody()->getContents() );

        return redirect()->route( 'home.index' );
    }

    public function savePost( $id )
    {
        $client = new ClientGuzzle( new Client );

        $response = $client->request( 'POST', 'interactions', [
            'form_params' => [
                'type'                  =>  'reaction',
                'content'               =>  'save',
                'interactable[id]'      =>  $id,
                'interactable[type]'    =>  'post'
            ]
        ]);

        return json_decode( $response->getBody()->getContents() );
    }

} // ShowPost
