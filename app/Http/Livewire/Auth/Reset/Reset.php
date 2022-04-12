<?php

namespace App\Http\Livewire\Auth\Reset;

use Livewire\Component;

use App\Client\ClientGuzzle;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\ClientException;

class Reset extends Component
{
    public $token       = '';
    public $password    = '';
    public $return      = '';

    public function submit()
    {
        $client = new ClientGuzzle( new Client );

        try {
            $response = $client->request( 'PATCH', config( 'bffapi.auth.reset' ), [
                'form_params' => [
                    'token'         => $this->token,
                    'password'      => $this->password
                ]
            ]);

            $response = json_decode( $response->getBody() );

            Session::put( 'user', $response->user );

            return redirect()->route( 'verify' );

        } catch ( ClientException $e ) {
            $response = $e->getResponse();
            $responseBodyAsString = json_decode( $response->getBody()->getContents() );
            $errors = $responseBodyAsString->errors;
            dd($errors);

            return $this->return = $errors;
        }
    }

    public function render()
    {
        return view( 'livewire.auth.reset.index' )
                ->layout( 'livewire.layouts.auth.reset' );
    }

} // Reset
