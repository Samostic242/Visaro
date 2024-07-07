<?php

namespace App\Http\Integrations\Flutterwave;

use Saloon\Http\Connector;
use Saloon\Contracts\Authenticator;
use Saloon\Traits\Plugins\AcceptsJson;
use Saloon\Http\Auth\TokenAuthenticator;

class FlutterwaveConnection extends Connector
{
    use AcceptsJson;

    /**
     * The Base URL of the API
     */
    public function resolveBaseUrl(): string
    {
        return config('services.flutterwave.base_url');
    }


    /**
     * Default headers for every request
     */
    protected function defaultHeaders(): array
    {
        return [
            "Authorization" => "Bearer " . config('services.flutterwave.secret_key'),
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
