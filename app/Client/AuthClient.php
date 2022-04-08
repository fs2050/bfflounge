<?php

namespace App\Client;

use App\Client\ClientGuzzle;

class AuthClient
{
    private $client;

    public function __construct(
        ClientGuzzle $client
    )
    {
        $this->client = $client;
    }

    public function login($email, $password)
    {
        $response = $this->client->request('POST', config('bffapi.auth.login'), [
            'form_params' => compact('email', 'password')
        ]);

        return json_decode($response->getBody()->getContents());
    }
}
