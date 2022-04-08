<?php

namespace App\Http\Livewire\Auth\Login;

use Livewire\Component;

use App\Client\ClientGuzzle;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\ClientException;

class Login extends Component
{
    public $email       = '';
    public $password    = '';
    public $return      = '';

    public function submit()
    {
        $client = new ClientGuzzle( new Client );

        try {
            $response = $client->request( 'POST', config( 'bffapi.auth.login' ), [
                'form_params' => [
                    'email'         => $this->email,
                    'password'      => $this->password
                ]
            ]);

            $response = json_decode( $response->getBody() );

            Session::put( 'user', $response->user );

            return redirect()->route( 'home.index' );

        } catch ( ClientException $e ) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();

            $this->return = 'Ops.. Login e/ou senha inválidos';
        }
    }

    public function render()
    {
        return view( 'livewire.auth.login.index' )
                ->layout( 'livewire.layouts.auth.login' );
    }

} // Login
