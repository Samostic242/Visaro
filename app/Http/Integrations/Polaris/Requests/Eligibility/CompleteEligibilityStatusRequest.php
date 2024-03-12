<?php

namespace App\Http\Integrations\Polaris\Requests\Eligibility;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CompleteEligibilityStatusRequest extends Request implements HasBody
{
    use HasJsonBody;

    public function __construct(
        protected string $otp,
        protected string $otp_reference,
        protected bool   $test = true
    )
    {
    }


    protected Method $method = Method::GET;


    public function resolveEndpoint(): string
    {
        return '/api/External/CheckEligibilityPhoneNumber';
    }


    protected function defaultBody(): array
    {
        return [
            'otpValue' => $this->otp,
            'otpReference' => $this->otp_reference,
            'isTest' => $this->test,
        ];
    }
}
