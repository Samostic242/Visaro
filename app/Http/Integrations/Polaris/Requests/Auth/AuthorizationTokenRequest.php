<?php

namespace App\Http\Integrations\Polaris\Requests\Auth;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class AuthorizationTokenRequest extends Request implements HasBody
{
    use HasJsonBody;


    protected Method $method = Method::POST;


    public function resolveEndpoint(): string
    {
        return '/connect/token';
    }

    protected function defaultBody(): array
    {
        return [
            'client_id' => config('services.facility.creditors.polaris.public_key'),
            'client_secret' => config('services.facility.creditors.polaris.secret_key'),
            'grant_type' => config('services.facility.creditors.polaris.grant_type'),
        ];
    }
}
