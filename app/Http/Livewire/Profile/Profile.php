<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use App\Client\UserClient;
use App\Client\ProfileClient;

use App\Client\SuggestionClient;
use App\Client\FollowerClient;

class Profile extends Component
{
    protected $userClient;
    protected $profileClient;
    protected $suggestionClient;
    protected $followerClient;

    public $user = [];
    public $profiles = [];
    public $profile = [
        'name' => 'Profile',
        'slug' => 'slug',
        'bio' => 'Conteúdo da bio',
        'avatar' => null,
        'cover' => null,
    ];

    public function boot(
        UserClient $userClient,
        ProfileClient $profileClient,
        SuggestionClient $suggestionClient,
        FollowerClient $followerClient,
    )
    {
        $this->userClient = $userClient;
        $this->profileClient = $profileClient;
        $this->suggestionClient = $suggestionClient;
        $this->followerClient = $followerClient;
    }

    public function mount()
    {
        $this->user = (array)session()->get('user');
        $userData = $this->userClient->show(session()->get('user')->id);

        $this->loadSuggestions();

        $this->profiles = array_map(function($item) {
            return (array)$item;
        }, $userData->profiles);

        if(count($this->profiles)) {
            $this->profile = reset($this->profiles);

            $this->profile['likes'] = 1000;
            $this->profile['views'] = 2000;
            $this->profile['subscribers'] = 100;
            $this->profile['income'] = 100;
        }

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

    public function render()
    {
        return view( 'livewire.profile.index' )
            ->layout( 'livewire.layouts.profile' );
    }

} // Profile
