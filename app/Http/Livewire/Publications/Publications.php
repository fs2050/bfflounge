<?php

namespace App\Http\Livewire\Publications;

use Livewire\Component;

use App\Client\ClientGuzzle;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\ClientException;

use App\Client\SuggestionClient;
use App\Client\FollowerClient;

class Publications extends Component
{

    protected $suggestionClient;
    protected $followerClient;

    public $suggestions = [];
    public $content = '';

    public function boot(
        SuggestionClient $suggestionClient,
        FollowerClient $followerClient
    ) {
        $this->suggestionClient = $suggestionClient;
        $this->followerClient = $followerClient;
    }

    public function mount()
    {
        $this->loadSuggestions();
    }

    public function loadSuggestions()
    {
        $suggestionsData = $this->suggestionClient->index();

        $this->suggestions = array_map(function ($item) {
            return (array)$item;
        }, $suggestionsData);
    }

    public function render()
    {
        $client = new ClientGuzzle( new Client );

        $userID = Session::get( 'user' )->id;

        $user = $client->request( 'GET', "users/$userID" );

        $profile = json_decode( $user->getBody()->getContents() );

        // $profileID = $profile->profiles[0]->id;

        // $response = $client->request( 'GET', "posts/?filter[profile_id]=$profileID" );
        $response = $client->request( 'GET', "posts" );

        $posts = json_decode( $response->getBody()->getContents() );

        return view( 'livewire.publications.index', [
            'posts'     => $posts->data
        ]);
    }

    public function editPost( $id )
    {
        $client = new ClientGuzzle( new Client );

        $response = $client->request( 'HEAD', 'posts', [
            'form_params' => [
                'id'                    =>  $id,
                'content'               =>  $this->content
            ]
        ]);

        json_decode( $response->getBody()->getContents() );

        return redirect()->route( 'publications.index' );
    }

    public function destroyPost( $id )
    {
        $client = new ClientGuzzle( new Client );

        $response = $client->request( "DELETE", "interactions/$id/destroy" );

        json_decode( $response->getBody()->getContents() );

        return redirect()->route( 'publications.index' );
    }

    public function commentPost()
    {
        $client = new ClientGuzzle( new Client );

        $response = $client->request( 'POST', 'interactions', [
            'form_params' => [
                'type'                  =>  'comment',
                'content'               =>  $this->contentComment,
                'interactable[id]'      =>  $this->id,
                'interactable[type]'    =>  'post'
            ]
        ]);

        return json_decode( $response->getBody()->getContents() );
    }

    public function commentCommentPost()
    {
        $client = new ClientGuzzle( new Client );

        $response = $client->request( 'POST', 'interactions', [
            'form_params' => [
                'type'                  =>  'comment',
                'content'               =>  $this->contentComment,
                'interactable[id]'      =>  $this->id,
                'interactable[type]'    =>  'comment'
            ]
        ]);

        return json_decode( $response->getBody()->getContents() );
    }

    public function follow($profileId)
    {
        try {
            $this->followerClient->follow($profileId);
            $this->loadSuggestions();
        } catch (\Exception $e) {
            $this->emit('showErrorMessage', 'Não foi possível realizar a operação, tente mais tarde.');
        }
    }

} // Home
