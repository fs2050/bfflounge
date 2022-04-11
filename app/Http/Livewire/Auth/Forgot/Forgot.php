<?php

namespace App\Http\Livewire\Auth\Forgot;

use Livewire\Component;

use App\Client\ClientGuzzle;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;

class Forgot extends Component
{
    public $email       = '';
    public $return      = '';

    public function submit()
    {
        $this->validate([
            'email'     => [ 'required', 'email' ]
        ]);

        $client = new ClientGuzzle( new Client );

        $formParams = [ 'form_params' => [
            'email' => $this->email,
        ]];

        $response = $client->request( 'POST', config( 'bffapi.auth.forgot' ), $formParams );

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
        return view( 'livewire.auth.forgot.index' )
                ->layout( 'livewire.layouts.forgot' );
    }

} // Forgot
