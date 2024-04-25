<?php

namespace App\Http\Integrations\Trips\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class FlightBookingRequest extends Request
{
    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::POST;

    function __construct(protected $data)
    {

    }

    protected function defaultBody(): array
    {
        return [
            "SelectedFlights" => $this->data,
          /*   "SessionId" => $this->data->SessionId,
            "AmountPaid" => $this->data->AmountPaid,
            "BillingAddress" => $this->data->BillingAddress,
            "PaymentType" => $this->data->PaymentType,
            "TicketType" => $this->data->TicketType,
            "AirTravellers" => $this->data->AirTravellers, */
        ];
    }

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/Flight/BookFlight';
    }
}
