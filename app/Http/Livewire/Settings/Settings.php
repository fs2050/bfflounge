<?php

namespace App\Http\Livewire\Settings;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Arr;

use Livewire\WithFileUploads;
use Livewire\Component;
use App\Client\UserClient;
use App\Client\ProfileClient;

use Storage;

class Settings extends Component
{
    use WithFileUploads;

    protected $userClient;
    protected $profileClient;

    public $user = [];
    public $credentials = [];
    public $profiles = [];

    public $selectedProfileId;
    public $avatar;
    public $cover;

    protected $listeners = [
        'deleteAccount',
        'updateAccount',
        'updatePassword',
        'updateProfile',
        'setSelectedProfileId',
        'sendCover',
        'sendAvatar'
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
    }

    public function updateAccount()
    {
        try {
            $this->userClient->update(session()->get('user')->id, $this->user);
            $this->emit('accountUpdated');
        } catch (\Exception $e) {
            $this->emit('showErrorMessage', 'Não foi possível realizar a operação');
        }
    }

    public function updatePassword()
    {
        try {
            $validator = Validator::make($this->credentials, [
                'current_password' => 'required',
                'password' => 'required|confirmed',
            ]);

            if ($validator->fails()) {
                throw new \Exception();
            }

            $this->userClient->update(session()->get('user')->id, $this->credentials);
            $this->credentials = [
                'current_password' => '',
                'password' => '',
                'password_confirmation' => '',
            ];
            $this->emit('passwordUpdated');
        } catch (\Exception $e) {
            $this->emit('showErrorMessage', 'Não foi possível realizar a operação');
        }
    }

    public function deleteAccount()
    {
        try {
            $this->userClient->destroy(session()->get('user')->id);
            $this->emit('accountDeleted');
        } catch (\Exception $e) {
            $this->emit('showErrorMessage', 'Não foi possível realizar a operação');
        }
    }

    public function updateProfile($id)
    {
        try {
            $profile = collect($this->profiles)->where('id', $id)->first();
            $response = $this->profileClient->update($profile['id'], $profile);
            $this->emit('profileUpdated');
        } catch (\Exception $e) {
            $this->emit('showErrorMessage', 'Não foi possível realizar a operação');
        }
    }

    public function setSelectedProfileId($id)
    {
        $this->selectedProfileId = $id;
    }

    public function changeCover($id)
    {
        $this->cover = [];
        $this->selectedProfileId = $id;
        $this->emit('showSelectCoverDialog');
    }

    public function changeAvatar($id)
    {
        $this->avatar = [];
        $this->selectedProfileId = $id;
        $this->emit('showSelectAvatarDialog');
    }

    public function sendCover()
    {

        try {
            $profile = collect($this->profiles)->where('id', $this->selectedProfileId)->first();
            $upload = reset($this->cover);
            $path = $upload->store('covers');

            $this->emit('sendCoverToApi',  $profile);
        } catch (\Exception $e) {
            dd($e->getMessage());
            $this->emit('showErrorMessage', 'Não foi possível realizar a operação');
        }
    }

    public function sendAvatar()
    {

        try {
            $profile = collect($this->profiles)->where('id', $this->selectedProfileId)->first();
            $upload = reset($this->avatar);
            $path = $upload->store('avatars');

            $this->emit('sendAvatarToApi',  $profile);
        } catch (\Exception $e) {
            dd($e->getMessage());
            $this->emit('showErrorMessage', 'Não foi possível realizar a operação');
        }
    }

    public function render()
    {
        return view('livewire.settings.index' );
    }

} // Settings
