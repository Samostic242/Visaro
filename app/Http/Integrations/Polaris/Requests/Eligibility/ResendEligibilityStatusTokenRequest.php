<?php

namespace App\Http\Integrations\Polaris\Requests\Eligibility;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ResendEligibilityStatusTokenRequest extends Request
{
    public function __construct(
        protected string $reference
    )
    {
    }

    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/api/External/ResendOtp/' . $this->reference;
    }

}
