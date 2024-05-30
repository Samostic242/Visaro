<?php

namespace App\Http\Integrations\Paystack;

use Saloon\Http\Connector;
use Saloon\Contracts\Authenticator;
use Saloon\Traits\Plugins\AcceptsJson;
use Saloon\Http\Auth\TokenAuthenticator;

class PaystackConnection extends Connector
{
    use AcceptsJson;

    /**
     * The Base URL of the API
     */
    public function resolveBaseUrl(): string
    {
        return config('services.paystack.base_url');
    }


    /**
     * Default headers for every request
     */
    protected function defaultHeaders(): array
    {
        return [
            "Authorization" => "Bearer " . config('services.paystack.secret_key'),
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];
    }

    /**
     * Default HTTP client options
     */
    protected function defaultConfig(): array
    {
        return [];
    }
}
