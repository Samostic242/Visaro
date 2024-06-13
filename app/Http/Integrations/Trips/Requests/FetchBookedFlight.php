<?php

namespace App\Http\Integrations\Trips\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class FetchBookedFlight extends Request implements HasBody
{
    use HasJsonBody;
    function __construct(protected $data)
    {

    }
    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::POST;

    protected function defaultBody(): array
    {
        return [
            'BookingReferenceType' => $this->data['referenceType'],
            'Surname' => $this->data['surname'],
            'BookingReferenceId' => $this->data['referenceId'],
        ];
    }
    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/Flight/MyReservation';
    }
}
