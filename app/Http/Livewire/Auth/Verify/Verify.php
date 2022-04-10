<?php

namespace App\Http\Livewire\Auth\Verify;

use Livewire\Component;

use App\Client\ClientGuzzle;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\ClientException;

class Verify extends Component
{
    public $activation_code     = '';
    public $return              = '';

    public function submit()
    {
        $client = new ClientGuzzle( new Client );

        try {
            $response = $client->request( 'PATCH', config( 'bffapi.auth.activate' ), [
                'headers' => [
                    'Accept'     => 'application/json'
                ],
                'form_params' => [
                    'activation_code'   => $this->activation_code
                ]
            ]);

            $response = json_decode( $response->getBody() );

            Session::put( 'user', $response->user );

            return redirect()->route( 'home.index' );

        } catch ( ClientException $e ) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            dd($responseBodyAsString);

            return $this->return = 'Ops.. Código inválido!';
        }
    }

    public function render()
    {
        return view( 'livewire.auth.verify.index' )
                ->layout( 'livewire.layouts.auth.verify' );
    }

} // Verify
