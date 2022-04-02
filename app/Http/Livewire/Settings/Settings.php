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

    public function mount(
        ClientApi $clientApi
    )
    {
        $this->clientApi = $clientApi;
        $res = $this->clientApi->login(env('USER_EMAIL'), env('USER_PASS'));

        session()->put('token', $res->user->token);
        session()->put('user', $res->user);

        $this->userId = session()->get('user')->name;
        $this->userName = session()->get('user')->id;
        $this->token = session()->get('token');
    }

    public function render()
    {
        return view( 'livewire.settings.index' );
    }

} // Settings
