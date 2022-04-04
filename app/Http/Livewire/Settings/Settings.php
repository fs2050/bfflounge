<?php

namespace App\Http\Livewire\Settings;

use Livewire\Component;
use App\Services\ClientApi;

class Settings extends Component
{
    protected $clientApi;

    public $userId = null;
    public $userName = "";
    public $token = "";

    protected $listeners = ['deleteAccount'];

    public function booted(
        ClientApi $clientApi
    )
    {
        $this->clientApi = $clientApi;
        $res = $this->clientApi->login(env('USER_EMAIL'), env('USER_PASS'));

        session()->put('token', $res->user->token);
        session()->put('user', $res->user);

        $this->userId = session()->get('user')->id;
        $this->userName = session()->get('user')->name;
        $this->token = session()->get('token');
    }

    public function deleteAccount()
    {
        $this->clientApi->userDelete(session()->get('user')->id);
    }

    public function render()
    {
        return view( 'livewire.settings.index' );
    }

} // Settings
