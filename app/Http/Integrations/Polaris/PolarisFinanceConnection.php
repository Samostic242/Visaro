<?php

namespace App\Http\Integrations\Polaris;

use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AcceptsJson;

class PolarisFinanceConnection extends Connector
{
    use AcceptsJson;

    /**
     * The Base URL of the API
     */
    public function resolveBaseUrl(): string
    {
        return config('services.facility.creditors.polaris.base_url');
    }

    /**
     * Default headers for every request
     */
    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
    }

    /**
     * Default HTTP client options
     */
    protected function defaultConfig(): array
    {
        return [

        ];
    }
}
