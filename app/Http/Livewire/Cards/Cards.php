<?php

namespace App\Http\Livewire\Cards;

use Livewire\Component;

use App\Client\GerencianetClient;

class Cards extends Component
{
    protected $gerencianetClient;

    public $buyer = [];
    public $cards = [];

    public function boot(
        GerencianetClient $gerencianetClient,
    )
    {
        $this->gerencianetClient = $gerencianetClient;
    }

    public function mount()
    {
        $buyers = $this->gerencianetClient->buyers();

        $this->buyers = array_map(function($item) {
            return (array)$item;
        }, $buyers);

        $this->buyer = reset($this->buyers);

        if (is_array($this->buyer) && isset($this->buyer['cards'])) {
            $this->cards = array_map(function($item) {
                return (array)$item;
            }, $this->buyer['cards']);
        }
    }

    public function render()
    {
        return view( 'livewire.cards.index' );
    }

} // Cards
