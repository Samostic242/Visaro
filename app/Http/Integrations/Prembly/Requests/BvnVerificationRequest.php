<?php

namespace App\Http\Integrations\Prembly\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class BvnVerificationRequest extends Request implements HasBody
{
    use HasJsonBody;
    public function __construct(
        protected $bvn_number
    ){}
    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::POST;

    protected function defaultBody(): array
    {
        return [
            'number' => $this->bvn_number,
        ];
    }

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/identitypass/verification/bvn_validation';
    }
}
