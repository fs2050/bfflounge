<?php

namespace App\Http\Livewire\Auth\Resend;

use Livewire\Component;

use App\Client\ClientGuzzle;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\ClientException;

class Resend extends Component
{
    public $return      = '';

    public function submit()
    {
        $client = new ClientGuzzle( new Client );

        try {
            $response = $client->request( 'POST', config( 'bffapi.auth.resend' ), [
                'form_params' => [
                    'email'         => $this->email
                ]
            ]);

            $response = json_decode( $response->getBody() );

            Session::put( 'user', $response->user );

            return redirect()->route( 'home.index' );

        } catch ( ClientException $e ) {
            $response = $e->getResponse();
            $responseBodyAsString = json_decode( $response->getBody()->getContents() );
            $errors = $responseBodyAsString;

            if( $errors == [] );
                return redirect()->route( 'verify' );

            return $this->return = $errors;
        }
    }

} // Resend
