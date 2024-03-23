<?php

namespace App\Http\Integrations\Polaris\Requests\Eligibility;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class InitiateEligibilityStatusRequest extends Request implements HasBody
{
    use HasJsonBody;

    public function __construct(
        protected string $account_number,
        protected string $phone_number,
        protected string $firstname
    )
    {
    }

    protected Method $method = Method::POST;
    
    public function resolveEndpoint(): string
    {
        return '/api/External/CheckEligibilityPhoneNumber';
    }


    protected function defaultBody(): array
    {
        return [
            'accountNumber' => $this->account_number,
            'phoneNumber' => $this->phone_number,
            'firstName' => $this->firstname,
        ];
    }
}
