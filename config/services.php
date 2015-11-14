<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],
     'facebook' => [
        'client_id' =>  '959906780742459',
        'client_secret' => '60b55c848ff69eb9b07325a157243f13',
        'redirect' => 'http://projectmechloc.dev/social/login/facebook',
    ],


     'google' => [
        'client_id' =>  '453331325939-00a9vuqqs4romkm8bcunqdksh32bg41c.apps.googleusercontent.com',
        'client_secret' => env('Ooeg_9YpXrEgh0bABxj1t52o'),
        'redirect' => 'http://projectmechloc.dev/social/login/google',
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

];
