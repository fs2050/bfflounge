<?php

namespace App\Http\Livewire\Auth\Register;

use Livewire\Component;

use App\Client\ClientGuzzle;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\ClientException;

class Register extends Component
{
    public $name        = '';
    public $email       = '';
    public $password    = '';
    public $return      = '';

    public function submit()
    {
        $client = new ClientGuzzle( new Client );

        try {
            $response = $client->request( 'POST', config( 'bffapi.auth.register' ), [
                'form_params' => [
                    'name'          => $this->name,
                    'email'         => $this->email,
                    'password'      => $this->password
                ]
            ]);

            $response = json_decode( $response->getBody() );

            return redirect()->route( 'verify' );

        } catch ( ClientException $e ) {
            $response = $e->getResponse();
            $responseBodyAsString = json_decode( $response->getBody()->getContents() );
            $responseBodyAsString->errors;

            return $this->return = 'Ops... algo errado!';
        }
    }

    public function render()
    {
        return view( 'livewire.auth.register.index' )
                ->layout( 'livewire.layouts.auth.register' );
    }

} // Register
