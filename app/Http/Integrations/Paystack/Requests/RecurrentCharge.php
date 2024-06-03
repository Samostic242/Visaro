<?php

namespace App\Http\Integrations\Paystack\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class RecurrentCharge extends Request implements HasBody
{
    use HasJsonBody;

    function __construct(
        protected $amount,
        protected $email,
        protected $authorization,
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
            'authorization_code'=> $this->authorization
        ];
    }

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/transaction/charge_authorization';
    }
}
