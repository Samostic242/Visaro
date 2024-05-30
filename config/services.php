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
                'fee' => env('AVIATION_BOOKING_CHARGE', 100000),

            ],
        ],
        'health' => []
    ],
    'facility' => [
        'primary_charge' => env('FACILITY_CHARGE'),
        'creditors' => [
            'polaris' => [
                'base_url' => env('CREDITOR_POLARIS_FINANCE_BASE_URL'),
                'auth_base_url' => env('CREDITOR_POLARIS_FINANCE_AUTH_BASE_URL'),
                'authorization_type' => env('CREDITOR_POLARIS_FINANCE_AUTH_TYPE'),
                'public_key' => env('CREDITOR_POLARIS_FINANCE_PUBLIC_KEY'),
                'secret_key' => env('CREDITOR_POLARIS_FINANCE_PRIVATE_KEY'),
                'grant_type' => env('CREDITOR_POLARIS_FINANCE_GRANT_TYPE'),
                'token' => env('CREDITOR_POLARIS_FINANCE_TOKEN'),
            ],
        ],
        'charges' => [
            'fee' => env('AVIATION_BOOKING_CHARGE', 100000),

        ],

    ],
    'firebase' => [
        'base_url' => env('FIREBASE_BASE_URL'),
        'server_key' => env('FIREBASE_SERVER_KEY'),
    ],

    'prembly' => [
        'base_url' => env('PREMBLY_BASE_URL'),
        'api_key' => env('PREMBLY_API_KEY'),
        'app_id' => env('PREMBLY_APP_ID')
    ],
    'paystack' => [
        'base_url' => env('PAYSTACK_BASE_URL'),
        'secret_key' => env('PAYSTACK_SECRET_KEY'),
        'public_key' => env('PAYSTACK_PUBLIC_KEY'),
    ],


];
