<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use App\Client\UserClient;
use App\Client\ProfileClient;

class Profile extends Component
{
    protected $userClient;
    protected $profileClient;

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
    )
    {
        $this->userClient = $userClient;
        $this->profileClient = $profileClient;
    }

    public function mount()
    {
        $this->user = (array)session()->get('user');
        $userData = $this->userClient->show(session()->get('user')->id);

        $this->profiles = array_map(function($item) {
            return (array)$item;
        }, $userData->profiles);

        if(count($this->profiles)) {
            $this->profile = reset($this->profiles);
        }

    }

    public function render()
    {
        return view( 'livewire.profile.index' )
            ->layout( 'livewire.layouts.profile' );
    }

} // Profile
