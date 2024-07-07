<?php

namespace App\Http\Integrations\Flutterwave\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class RecurrentChargeFlutterwave extends Request implements HasBody
{
    use HasJsonBody;

    function __construct(
        protected $amount,
        protected $email,
        protected $authorization,
        protected $tx_ref
    ){}
    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::POST;

    protected function defaultBody(): array
    {
        return [
            'token' => $this->authorization,
            'currency' => 'NGN',
            'country' => 'NG',
            'amount' => $this->amount,
            'email' => $this->email,
            'narration' => 'Visaro Payment',
            'tx_ref' => $this->tx_ref
        ];
    }
    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/tokenized-charges';
    }
}
