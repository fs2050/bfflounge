<?php

namespace App\Http\Livewire\Auth\Login;

use Livewire\Component;

use App\Client\ClientGuzzle;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;

class Login extends Component
{
    public $form = [
        'email'     => '',
        'password'  => '',
    ];

    public $return = '';

    public function submit()
    {
        $this->validate([
            'form.email'        => [ 'required', 'email' ],
            'form.password'     => [ 'required' ]
        ]);

        $client = new ClientGuzzle( new Client );

        $formParams = [ 'form_params' => [
            "email"         => $this->form[ 'email' ],
            "password"      => $this->form[ 'password' ],
        ]];

        $response = $client->request( 'POST', config( 'bffapi.auth.login' ), $formParams );

        if( $response->getStatusCode() == 200 ) {

            $response = json_decode( ( string ) $response->getBody() );

            Session::put( 'user', $response->user );

            return redirect()->route( 'home.index' );
        }
        else{

            $this->return = 'Login ou senha inválidos';

        }

    }

    public function render()
    {
        return view( 'livewire.auth.login.index' )
                ->layout( 'livewire.layouts.login' );
    }

} // Login
