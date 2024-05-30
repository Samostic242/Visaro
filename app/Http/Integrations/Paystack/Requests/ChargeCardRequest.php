<?php

namespace App\Http\Integrations\Paystack\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class ChargeCardRequest extends Request implements HasBody
{
    use HasJsonBody;

    function __construct(
        protected $amount,
        protected $email
    ){}
    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::POST;

    protected function defaultBody(): array
    {
        return [
            'email' => $this->email,
            'amount' => $this->amount,
        ];
    }
    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/transaction/initialize';
    }
}
