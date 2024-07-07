<?php

namespace App\Http\Integrations\Flutterwave\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class VerifyTransactionRequest extends Request implements HasBody
{
    use HasJsonBody;
    function __construct(
        protected $id
    ){}


    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::GET;

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/transactions/'.$this->id.'/verify';
    }
}
