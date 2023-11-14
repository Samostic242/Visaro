<?php

namespace App\Http\Integrations\Trips\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class GetTokenRequest extends Request implements HasBody
{
    use HasJsonBody;
    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::POST;
    public function __construct(
        protected string $user_fullname,
        protected string $user_id,
    ) {
    }
    protected function defaultBody(): array
    {
        return [
            'CustomerName' => $this->user_fullname,
            'CustomerIdentifier' => $this->user_id,
        ];
    }

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/account/gettoken';
    }
}
