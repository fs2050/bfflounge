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

        $responseObj = $this->decodeBody($res->getBody());

        if (property_exists($responseObj, 'user')) {
            session()->put('token', $responseObj->user->token);
            session()->put('user', $responseObj->user);
        }

        return $responseObj;
    }

    public function userUpdate($data)
    {
        $token = session()->get('token');
        $res = $this->client->request('PUT', 'users/' . $data['id'], [
            'form_params' => $data,
            'headers' => [
                "authorization" => "Bearer {$token}"
            ]
        ]);

        return $this->decodeBody($res->getBody());
    }

    public function userDelete($id)
    {
        $token = session()->get('token');
        $res = $this->client->request('DELETE', "users/$id/destroy", [
            'headers' => [
                "authorization" => "Bearer {$token}"
            ]
        ]);

        return $this->decodeBody($res->getBody());
    }
}
