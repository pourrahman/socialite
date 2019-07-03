<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '327924944752590',
        'client_secret' => '83889e73606239d984a30c70179ee8ec',
        'redirect' => 'https://localhost:8000/auth/facebook/callback',
    ],
    'google' => [
        'client_id'     => '1055417589293-1vdq6nuoj3jgha5gvmsl5q12p0d70ukf.apps.googleusercontent.com',
        'client_secret' => 'NWuYr-Z0Rn7xKrNcxXQOtWIs',
        'redirect'      => 'http://localhost:8000/auth/google/callback',
    ],
    'twitter' => [
        'client_id'     => '',
        'client_secret' => '',
        'redirect'      => 'http://localhost:8000/auth/twitter/callback',
    ],

];
