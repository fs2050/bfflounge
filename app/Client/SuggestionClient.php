<?php

namespace App\Client;

use App\Client\ClientGuzzle;

class SuggestionClient
{
    private $client;
    private $token;

    public function __construct(
        ClientGuzzle $client
    ) {
        $this->client = $client;

        if (session()->has('user')) {
            $this->token = session()->get('user')->token;
        }
    }

    public function index()
    {
        $response = $this->client->request('GET', "suggestions", [
            'headers' => [
                "Authorization" => "Bearer {$this->token}"
            ]
        ]);

        return json_decode($response->getBody()->getContents());
    }
}
