<?php

namespace App\Http\Livewire\Settings;

use Illuminate\Support\Facades\Validator;

use Livewire\Component;
use App\Client\UserClient;

class Settings extends Component
{
    protected $userClient;

    public $user = [];
    public $credentials = [];

    protected $listeners = ['deleteAccount', 'updateAccount', 'updatePassword'];

    public function boot(
        UserClient $userClient
    ) {
        $this->userClient = $userClient;
    }

    public function mount()
    {
        $this->user = (array)session()->get('user');
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

    public function render()
    {
        return view('livewire.settings.index' );
    }

} // Settings
