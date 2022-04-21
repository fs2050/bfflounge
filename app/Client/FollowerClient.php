<?php

namespace App\Client;

use App\Client\ClientGuzzle;

class FollowerClient
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

    public function follow($profileId)
    {
        $userId = session()->get('user')->id;
        $response = $this->client->request('POST', "followers/$userId/follow", [
            'form_params' => ['profile_id' => $profileId],
            'headers' => [
                "Authorization" => "Bearer {$this->token}"
            ]
        ]);

        return json_decode($response->getBody()->getContents());
    }

    public function unfollow($profileId)
    {
        $userId = session()->get('user')->id;
        $response = $this->client->request('POST', "followers/$userId/unfollow", [
            'form_params' => ['profile_id' => $profileId],
            'headers' => [
                "Authorization" => "Bearer {$this->token}"
            ]
        ]);

        return json_decode($response->getBody()->getContents());
    }
}
