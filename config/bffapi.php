<?php

return [

    'base_url'          => env( 'BFF_API_URL' ),

    'auth' => [

        'register'      => 'auth/register',
        'verify'        => 'auth/verify',

        'login'         => 'auth/login',
        'forgot'        => 'auth/forgot'

    ] // auth

]; // return
