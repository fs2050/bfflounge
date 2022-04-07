<?php

namespace App\Http\Livewire\Auth\Recover;

use Livewire\Component;

use App\Client\ClientGuzzle;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;

class Recover extends Component
{
    public $token           = '';
    public $senha           = '';
    public $return          = '';

    public function submit()
    {
        $this->validate([
            'token'         => [ 'required' ],
            'senha'         => [ 'required', 'string,', 'confirmed' ]
        ]);

        $client = new ClientGuzzle( new Client );

        $formParams = [ 'form_params' => [
            'token'         => $this->token,
            'senha'         => $this->senha,
        ]];

        $response = $client->request( 'POST', config( 'bffapi.auth.recover' ), $formParams );

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
        return view( 'livewire.auth.recover.index' )
                ->layout( 'livewire.layouts.auth.recover' );
    }

} // Recover
