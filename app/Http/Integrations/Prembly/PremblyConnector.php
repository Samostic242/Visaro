<?php

namespace App\Http\Integrations\Prembly;

use Saloon\Http\Connector;
use Saloon\Contracts\Authenticator;
use Saloon\Traits\Plugins\AcceptsJson;
use Saloon\Http\Auth\TokenAuthenticator;

class PremblyConnector extends Connector
{
    use AcceptsJson;

    /**
     * The Base URL of the API
     */
    public function resolveBaseUrl(): string
    {
        return config('services.prembly.base_url');
    }


    /**
     * Default headers for every request
     */
    protected function defaultHeaders(): array
    {
        return [
            "x-api-key" => config('services.prembly.api_key'),
            "app-id" => config('services.prembly.app_id'),
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
