<?php

namespace App\Client;

use App\Client\ClientGuzzle;

class PicpayClient
{
    private $client;
    private $token;

    public function __construct(
        ClientGuzzle $client
    )
    {
        $this->client = $client;
        if (session()->has('user')) {
            $this->token = session()->get('user')->token;
        }
    }

    public function picpayBuyers()
    {
        $response = $this->client->request('GET', "payments/picpay/buyer", [
            'headers' => [
                "authorization" => "Bearer {$this->token}"
            ]
        ]);

        return json_decode($response->getBody()->getContents());
    }

    public function gerencianetBuyers()
    {
        $response = $this->client->request('GET', "payments/gerencianet/buyer", [
            'headers' => [
                "authorization" => "Bearer {$this->token}"
            ]
        ]);

        return json_decode($response->getBody()->getContents());
    }
}
