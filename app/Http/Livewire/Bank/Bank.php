<?php

namespace App\Http\Livewire\Bank;

use Livewire\Component;

use App\Client\BankingAccountClient;
use App\Client\UserClient;

class Bank extends Component
{
    protected $bankingAccountClient;
    protected $userClient;

    public $bankingAccounts = [];
    public $profile = [];

    public function boot(
        BankingAccountClient $bankingAccountClient,
        UserClient $userClient,
    )
    {
        $this->bankingAccountClient = $bankingAccountClient;
        $this->userClient = $userClient;
    }

    public function mount()
    {
        $this->user = (array)session()->get('user');
        $userData = $this->userClient->show(session()->get('user')->id);

        $profiles = array_map(function($item) {
            return (array)$item;
        }, $userData->profiles);

        if(is_array($profiles) && count($profiles) > 0) {
            $this->profile = reset($profiles);
            $bankingAccounts = $this->bankingAccountClient->index(['profile_id' => $this->profile['id']]);

            if(is_array($bankingAccounts->data) && count($bankingAccounts->data) > 0) {
                $this->bankingAccounts = array_map(function($item) {
                    return (array)$item;
                }, $bankingAccounts->data);
            }
        }
    }

    public function render()
    {
        return view( 'livewire.bank.index' );
    }

} // Bank
