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

class Home extends Component
{
    protected $suggestionClient;
    protected $followerClient;

    public $suggestions = [];

    public function boot(
        SuggestionClient $suggestionClient,
        FollowerClient $followerClient
    ) {
        $this->suggestionClient = $suggestionClient;
        $this->followerClient = $followerClient;
    }

    public function render()
    {
        return view( 'livewire.home.index' );
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
