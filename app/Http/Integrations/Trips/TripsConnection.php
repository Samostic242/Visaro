<?php

namespace App\Http\Integrations\Trips;

use Saloon\Http\Connector;
use Saloon\Contracts\Authenticator;
use Saloon\Traits\Plugins\AcceptsJson;
use Saloon\Http\Auth\TokenAuthenticator;

class TripsConnection extends Connector
{
    use AcceptsJson;

    /**
     * The Base URL of the API
     */
    public function resolveBaseUrl(): string
    {
        return config('services.sectors.aviation.providers.trips.base_url');
    }
    protected function defaultAuth(): ?Authenticator
    {
        return new TokenAuthenticator(config('services.sectors.aviation.providers.trips.authorization_code'));
    }


    /**
     * Default headers for every request
     */
    protected function defaultHeaders(): array
    {
        return [
            // "Authorization" => "Bearer " . config('services.sectors.aviation.trips.authorization_code'),
            "MerchantCode" =>  config('services.sectors.aviation.providers.trips.merchant_code'),
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
