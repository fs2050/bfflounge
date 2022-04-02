<?php

namespace App\Services;

use GuzzleHttp\Client as GuzzleClient;

class ClientApi
{
    public string $baseUrl = "";
    public string $token = "";
    public $client = null;

    public function __construct()
    {
        $this->baseUrl = env('BFF_API_URL');
        $this->client = new GuzzleClient(['base_uri' => $this->baseUrl]);
    }

    private function decodeBody($responseBody)
    {
        $strBody = (string)$responseBody;
        return json_decode($strBody);
    }

    public function login($email, $password)
    {
        $res = $this->client->request('POST', 'auth/login', [
            'form_params' => [
                'email' => $email,
                'password' => $password
            ]
        ]);
        return $this->decodeBody($res->getBody());
    }
}
