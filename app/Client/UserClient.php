<?php

namespace App\Client;

use App\Client\ClientGuzzle;

class UserClient
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

    public function show($id)
    {
        $response = $this->client->request('GET', "users/$id", [
            'headers' => [
                "Authorization" => "Bearer {$this->token}"
            ]
        ]);

        return json_decode($response->getBody()->getContents());
    }

    public function update($id, $data)
    {
        $response = $this->client->request('PUT', "users/$id", [
            'form_params' => $data,
            'headers' => [
                "Authorization" => "Bearer {$this->token}"
            ]
        ]);

        return json_decode($response->getBody()->getContents());
    }

    public function destroy($id)
    {
        $response = $this->client->request('DELETE', "users/$id/destroy", [
            'headers' => [
                "Authorization" => "Bearer {$this->token}"
            ]
        ]);

        return json_decode($response->getBody()->getContents());
    }
}
