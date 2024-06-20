<?php

namespace App\Http\Integrations\Trips\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;


class FlightBookingRequest extends Request implements HasBody
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
       /*      'SessionId' => $this->data->session,
            'TripType' => $this->data->mode,
            'TripMode' => $this->data->type, */
            "SelectedFlights" => $this->data->copy['PassengerDetails']['SelectedFlights'],
            "SessionId" => $this->data->copy['PassengerDetails']['SessionId'],
            "AmountPaid" => $this->data->copy['PassengerDetails']['AmountPaid'],
            "BillingAddress" => $this->data->copy['PassengerDetails']['BillingAddress'],
            "PaymentType" => $this->data->copy['PassengerDetails']['PaymentType'],
            "TicketType" => $this->data->copy['PassengerDetails']['TicketType'],
            "AirTravellers" => $this->data->copy['PassengerDetails']['AirTravellers']['LastName'],
        ];
    }

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/Flight/Domestic/BookFlight';
    }
}
