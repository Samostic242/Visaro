<?php

namespace App\Http\Integrations\Trips;

use Saloon\Http\Connector;
use Saloon\Contracts\Authenticator;
use Saloon\Traits\Plugins\AcceptsJson;
use Saloon\Http\Auth\TokenAuthenticator;

class FcmConnection extends Connector
{
    use AcceptsJson;

    /**
     * The Base URL of the API
     */
    public function resolveBaseUrl(): string
    {
        return config('services.firebase.base_url');
    }


    /**
     * Default headers for every request
     */
    protected function defaultHeaders(): array
    {
        return [
            "Authorization" => "Key " . config('services.firebase.server_key'),
            "Content-Type" => "application/json",
            "Accept" => "application/json"
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
