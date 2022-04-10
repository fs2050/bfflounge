<?php

return [

    'base_url'          => env( 'BFF_API_URL' ),

    'auth' => [

        'register'      => 'auth/register',
        'verify'        => 'auth/verify',

        'login'         => 'auth/login',
        'activate'      => 'auth/activate',
        'forgot'        => 'auth/forgot',
        'reset'         => 'auth/reset'

    ], // auth

    'profiles' => [
        'update' => 'profiles'
    ]

]; // return
