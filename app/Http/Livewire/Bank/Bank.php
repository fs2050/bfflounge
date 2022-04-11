<?php

namespace App\Http\Livewire\Bank;

use Livewire\Component;

use App\Client\PicpayClient;

class Bank extends Component
{
    protected $picpayClient;

    public $picpayBuyers = [];
    public $gerencianetBuyers = [];

    public function boot(
        PicpayClient $picpayClient,
    )
    {
        $this->picpayClient = $picpayClient;
    }

    public function mount()
    {
        $picpayBuyers = $this->picpayClient->picpayBuyers();
        $gerencianetBuyers = $this->picpayClient->gerencianetBuyers();

        $this->picpayBuyers = array_map(function($item) {
            return (array)$item;
        }, $picpayBuyers);

        $this->gerencianetBuyers = array_map(function($item) {
            return (array)$item;
        }, $gerencianetBuyers);
    }

    public function render()
    {
        return view( 'livewire.bank.index' );
    }

} // Bank
