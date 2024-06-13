<?php

namespace App\Http\Integrations\Trips\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class BookFlightRequest extends Request implements HasBody
{
    use HasJsonBody;
    /**
     * The HTTP method of the request
     */
    function __construct(protected $data)
    {

    }
    protected Method $method = Method::POST;

    protected function defaultBody(): array
    {
        return [
            'SessionId' => $this->data->session,
            'TripType' => $this->data->mode,
            'TripMode' => $this->data->type,
        ];
    }

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/ticketing/issue';
    }
}
