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

        $response = $client->request( 'GET', 'posts' );

        $posts = json_decode( $response->getBody()->getContents() );

       return view( 'livewire.publications.index', [
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
