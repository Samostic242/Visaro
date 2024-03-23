<?php

namespace App\Http\Integrations\Polaris\Requests\Loan;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class CheckLoanRequestStatusRequest extends Request
{
    public function __construct(
        protected string $request_id
    )
    {
    }

    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::GET;

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/api/External/QueryLoanRequest/' . $this->request_id;
    }
}
