<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'client_id' => '330261455277514',  //client face của bạn
        'client_secret' => '28f05719fb0a5b04b6b4b4b1bd8304a7',  //client app service face của bạn
        'redirect' => 'https://localhost:8080/webshoplaravel/admin/callback' //callback trả về
    ],

    'google' => [
        'client_id' => '292225187513-nmdh5ucuulcthnqee9jrnq0649kr3tk3.apps.googleusercontent.com',
        'client_secret' => 'CDvWjrbrEiBgtFQIJqshWUK6',
        'redirect' => 'http://localhost:8080/webshoplaravel/admin/callback-gg'
    ],



];
