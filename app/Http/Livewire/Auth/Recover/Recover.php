<?php

namespace App\Http\Livewire\Auth\Recover;

use Livewire\Component;

use App\Client\ClientGuzzle;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\ClientException;

class Recover extends Component
{
    public $token       = '';
    public $password    = '';
    public $return      = '';

    public function submit()
    {
        dd("chegou aqui!");
        $client = new ClientGuzzle( new Client );

        try {
            $response = $client->request( 'POST', config( 'bffapi.auth.recover' ), [
                'form_params' => [
                    'token'         => $this->token,
                    'password'      => $this->password
                ]
            ]);

            $response = json_decode( $response->getBody() );

            Session::put( 'user', $response->user );

            return redirect()->route( 'recover' );

        } catch ( ClientException $e ) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();

            $this->return = 'Ops.. Algo errado!';
        }
    }

    public function render()
    {
        return view( 'livewire.auth.recover.index' )
                ->layout( 'livewire.layouts.auth.recover' );
    }

} // Recover
