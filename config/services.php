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

    'google' => [
        'client_id' => '324057162731-e5frr5371rbjm7rckod5rch0uu14u0jj.apps.googleusercontent.com',
        'client_secret' => 'SA_yF0RMCV0KKBgWEgmbyv5E',
        'redirect' => 'http://natalpraias.app/web/social/callback/google',
    ],

    'facebook' => [
        'client_id' => '394182944287463',
        'client_secret' => 'c7e5f925f499408d4f8f245343cf6804',
        'redirect' => 'http://natalpraias.app/web/social/callback/facebook',
    ],
];
