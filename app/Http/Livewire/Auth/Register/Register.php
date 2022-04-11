<?php

namespace App\Http\Livewire\Auth\Register;

use Livewire\Component;

use App\Client\ClientGuzzle;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;

class Register extends Component
{
    public $nome            = '';
    public $email           = '';
    public $senha           = '';
    public $confirmaSenha   = '';
    public $return          = '';

    public function submit()
    {
        $this->validate([
            'nome'                  => [ 'required', 'string', 'min:3' ],
            'email'                 => [ 'required', 'email' ],
            'senha'                 => [ 'required' ],
            'confirmar-senha'       => [ 'required' ]
        ]);

        $client = new ClientGuzzle( new Client );

        $formParams = [ 'form_params' => [
            'nome'                  => $this->nome,
            'email'                 => $this->email,
            'senha'                 => $this->senha,
            'confirmar-senha'       => $this->confirmaSenha
        ]];

        $response = $client->request( 'POST', config( 'bffapi.auth.register' ), $formParams );

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
        return view( 'livewire.auth.register.index' )
                ->layout( 'livewire.layouts.register' );
    }

} // Register
