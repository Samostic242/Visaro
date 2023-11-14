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

    'article' => [
        'base_uri' => env('PRODUCTS_SERVICE_BASE_URI'),
        'secret' => env('PRODUCTS_SERVICE_SECRET')
    ],
    'messaging' => [
        'sms' => [
            'termii' => [
                'sender_id' => env('TERMII_SENDER_ID'),
                'api_key' => env('TERMII_API_KEY'),
                'secret_key' => env('TERMII_SECRET_KEY')
            ]
        ]
    ],
    'sectors' => [
        'aviation' => [
            'providers' => [
                'trips' => [
                    'base_url' => env('TRIPS_BASE_URL'),
                    'authorization_code' => env('TRIPS_AUTHORIZATION_TOKEN'),
                    'merchant_code' => env('TRIPS_MERCHANT_CODE'),
                    'merchant_id' => env('TRIPS_MERCHANT_ID'),
                    'merchant_name' => env('TRIPS_MERCHANT_NAME'),
                ],
            ],
            'payment' => [
                'fee' => env('AVIATION_BOOKING_CHARGE',100000),

            ],
        ],
        'health' => []
    ]


];
