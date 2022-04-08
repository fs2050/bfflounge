<?php

namespace App\Http\Livewire\Auth\Verify;

use Livewire\Component;

use App\Client\ClientGuzzle;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;

class Verify extends Component
{
    public $activationCode      = '';
    public $return              = '';

    public function submit()
    {
        $this->validate([
            'activation_code'     => [ 'required', 'numeric', 'min:6' ]
        ]);

        $client = new ClientGuzzle( new Client );

        $formParams = [ 'form_params' => [
            'activation_code' => $this->activationCode,
        ]];

        $response = $client->request( 'POST', config( 'bffapi.auth.verify' ), $formParams );

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
        return view( 'livewire.auth.verify.index' )
                ->layout( 'livewire.layouts.verify' );
    }

} // Verify
