<?php

namespace App\Client;


use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;

class ClientGuzzle
{

    /**
     * @var Client
     */
    protected $client;
    protected $url_api;

    /**
     * GuzzleHelper constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->url_api = config('bffapi.base_url');
    }

    /**
     * Perform an http request
     * @param strign $method
     * @param string $url
     * @param array $option
     * @return mixed
     */
    public function request(string $method, string $url, array $options = [])
    {
        if(Session::has('user')){
            $options['headers']['Authorization'] = 'Bearer ' . Session::get('user');
        }

        // dd($options);

        $url = $this->url_api . '/' . $url;
        $response = $this->client->request($method, $url, $options);


        return $response;
    }

}

