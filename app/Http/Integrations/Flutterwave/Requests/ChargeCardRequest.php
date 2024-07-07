<?php

namespace App\Http\Integrations\Flutterwave\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class ChargeCardRequest extends Request implements HasBody
{
    use HasJsonBody;

    function __construct(
        protected $amount,
        protected $email,
        protected $ref
    ){}
    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::POST;

    protected function defaultBody(): array
    {
        return [
            'tx_ref' => $this->ref,
            'amount' => $this->amount,
            'currency' => 'NGN',
            'redirect_url' => 'https://visaro.ng',
            'customer' => [
                'email' => $this->email,
            ],
            'customization' => [
                'title' => 'Visaro Link Card',
            ],
            'meta' => [
                'consumer_id' => auth()->user()->code,
            ]
        ];
    }

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/payments';
    }
}
