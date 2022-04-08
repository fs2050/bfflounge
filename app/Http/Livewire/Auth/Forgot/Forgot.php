<?php

namespace App\Http\Livewire\Auth\Forgot;

use Livewire\Component;

use App\Client\ClientGuzzle;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\ClientException;

class Forgot extends Component
{
    public $email       = '';
    public $return      = '';

    public function submit()
    {
        $client = new ClientGuzzle( new Client );

        try {
            $response = $client->request( 'POST', config( 'bffapi.auth.forgot' ), [
                'form_params' => [
                    'email'         => $this->email
                ]
            ]);

            $response = json_decode( $response->getBody() );

            Session::put( 'user', $response->user );

            return redirect()->route( 'recover' );

        } catch ( ClientException $e ) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();

            $this->return = 'Ops.. E-mail inválido!';
        }
    }

    public function render()
    {
        return view( 'livewire.auth.forgot.index' )
                ->layout( 'livewire.layouts.auth.forgot' );
    }

} // Forgot
