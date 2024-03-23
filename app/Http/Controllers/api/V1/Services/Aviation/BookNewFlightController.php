<?php

namespace App\Http\Controllers\api\V1\Services\Aviation;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Services\Aviation\ConfirmBookingRequest;
use App\Http\Requests\V1\Services\Aviation\NewFlightBookingRequest;
use App\Http\Resources\V1\Services\Aviation\FlightBookingResource;
use App\Models\AirTraveller;
use App\Models\AirTravellerAddress;
use App\Models\AirTravellerDocument;
use App\Models\FlightBillingAddress;
use App\Models\FlightBooking;
use App\Models\FlightTicketDetail;
use App\Models\SelectedFlight;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class BookNewFlightController extends Controller
{
    public function submitNewFlightBookingDataFromWidget(NewFlightBookingRequest $request): object|string|array
    {
        $user = Auth::user();
        $widget_data = (object)$request->widget_data;
        $booking = $this->storeBookingBaseData($widget_data, $request->origin, $user);
        if (!$booking) {
            return respondError('01', "Error processing booking 01, please try again");
        }

        $booking_sub_data = $this->addBookingSelectedFlights($widget_data->PassengerDetails['SelectedFlights'], $booking, $user);
        if (!$booking_sub_data) {
            //Delete Main Booking
            return respondError('01', "Error processing booking 02, please try again");
        }
        $booking_billing_address = $this->addFlightsBookingBillingAddress($widget_data->PassengerDetails['BillingAddress'], $booking, $user);
        if (!$booking_billing_address) {
            //Delete Main Booking and previously stored data
            return respondError('01', "Error processing booking 03, please try again");
        }
        $booking_travellers = $this->addBookingAirTravellers($widget_data->PassengerDetails['AirTravellers'], $booking, $user);
        if (!$booking_travellers) {
            //Delete Main Booking and previously stored data
            return respondError('01', "Error processing booking 04, please try again");
        }
        $booking_ticket = $this->addFlightsBookingTicketingDetails($widget_data->TicketingDetails, $booking, $user);
        if (!$booking_ticket) {
            //Delete Main Booking and previously stored data
            return respondError('01', "Error processing booking 05, please try again");
        }
        $booking->refresh();

        return respondSuccess("Entry successfully", new FlightBookingResource($booking));
    }

    public function fetchUserFlightBookings($paginate = 10): object
    {
        try {
            $bookings = FlightBooking::where('user_id', auth()->user()->id)
                ->paginate($paginate);
            return respondSuccess("Entry successfully", FlightBookingResource::collection($bookings));
        } catch (\Throwable $th) {
            Log::error("Error fetching Travel bookings - {$th->getMessage()}");
            return respondError('01', "Error fetching travel bookings - {$th->getMessage()}");
        }
    }

    public function fetchFlightBooking($id): object
    {
        try {
            $booking = FlightBooking::where('user_id', auth()->user()->id)
                ->where('id', $id)
                ->first();
            if (!$booking) {
                return respondError('01', "Booking not found", status_code: 404);
            }
            return respondSuccess("Booking fetched successfully", new FlightBookingResource($booking));
        } catch (\Throwable $th) {
            Log::error("Error fetching Travel bookings - {$th->getMessage()}");
            return respondError('01', "Error fetching travel bookings - {$th->getMessage()}");
        }
    }

    public function confirmBooking(ConfirmBookingRequest $request, $id): object
    {
        try {
            $booking = FlightBooking::where('user_id', auth()->user()->id)
                ->where('id', $id)
                ->first();
            if (!$booking) {
                return respondError('01', "Booking not found", status_code: 404);
            }
            $booking->status = 'confirmed';
            $booking->save();

            $payment_options = [
                "payment_options" => [
                    [
                        'id' => 1,
                        'name' => 'Pay with Credit (Instalments)',
                        'code' => '002',
                        'description' => 'Make payment for this booking in 3 installments',
                        'active' => true,
                    ],
                    [
                        'id' => 2,
                        'name' => 'Pay Now (One time)',
                        'code' => '001',
                        'description' => 'Make an instant one-time payment for this booking',
                        'active' => false,
                    ],
                ]
            ];
            return respondSuccess("Booking confirmed successfully, select payment option", $payment_options);
        } catch (\Throwable $th) {
            Log::error("Error confirming Travel booking - {$th->getMessage()}");
            return respondError('01', "Error confirming travel booking - {$th->getMessage()}");
        }
    }


    private function storeBookingBaseData($widget_data, $origin, $user): FlightBooking|string
    {
        try {
            $booking = new FlightBooking();
            $booking->public_id = uuid();
            $booking->user_id = $user->id;
            $booking->origin = $origin;
            $booking->mode = $widget_data->TripsMode;
            $booking->type = $widget_data->TripsType;
            $booking->hash = $widget_data->Hash;
            $booking->session = $widget_data->PassengerDetails['SessionId'];
            $booking->amount_paid = $widget_data->PassengerDetails['AmountPaid'] ?? 0;
            $booking->payment_type = $widget_data->PassengerDetails['PaymentType'];
            $booking->ticket_type = $widget_data->PassengerDetails['TicketType'];
            $booking->promo_code = $widget_data->PassengerDetails['PromoCode'];
            $booking->close_session_after_booking = $widget_data->PassengerDetails['CloseSessionAfterBooking'];
            $booking->copy = $widget_data;
            $booking->save();
            return $booking;
        } catch (\Throwable $th) {
            //throw $th;
            return $th->getMessage() . 'storeBookingBaseData';
        }
    }

    private function addBookingSelectedFlights($selected_flights, $booking, $user): bool|string
    {
        try {
            foreach ($selected_flights as $key => $flight) {
                $flight = (object)$flight;
                $selected_flight = new SelectedFlight();
                $selected_flight->public_id = uuid();
                $selected_flight->user_id = $user->id;
                $selected_flight->flight_booking_id = $booking->id;
                $selected_flight->reference_number = $flight->ReferenceNumber;
                $selected_flight->recomendation_id = $flight->RecommendationID;
                $selected_flight->combination_id = $flight->CombinationID;
                $selected_flight->gds_id = $flight->GdsId;
                $selected_flight->agent_id = $flight->AgentId;
                $selected_flight->session = $booking->session;
                $selected_flight->flight_route_index = $flight->FlightRouteIndex;
                $selected_flight->copy = $flight;
                $selected_flight->save();
            }
            return true;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    private function addFlightsBookingBillingAddress($billing_address, $booking, $user): FlightBillingAddress|string
    {
        try {
            $billing_address = (object)$billing_address;
            $address = new FlightBillingAddress();
            $address->public_id = uuid();
            $address->user_id = $user->id;
            $address->flight_booking_id = $booking->id;
            $address->contact_name = $billing_address->ContactName;
            $address->contact_email = $billing_address->ContactEmail;
            $address->contact_mobile_number = $billing_address->ContactMobileNo;
            $address->address_line1 = $billing_address->AddressLine1;
            $address->address_line2 = $billing_address->AddressLine2;
            $address->session = $booking->session;
            $address->city = $billing_address->City;
            $address->country_code = $billing_address->CountryCode;
            $address->copy = $billing_address;
            $address->save();
            return $address;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    private function addBookingAirTravellers($travellers, $booking, $user): bool|string
    {

        try {
            foreach ($travellers as $key => $traveller1) {
                $traveller1 = (object)$traveller1;
                $traveller = new AirTraveller();
                $traveller->public_id = uuid();
                $traveller->user_id = $user->id;
                $traveller->flight_booking_id = $booking->id;
                $traveller->passenger_type_code = $traveller1->PassengerTypeCode;
                $traveller->name_prefix = $traveller1->NamePrefix;
                $traveller->firstname = $traveller1->FirstName;
                $traveller->lastname = $traveller1->LastName;
                $traveller->middlename = $traveller1->MiddleName;
                $traveller->session = $booking->session;
                $traveller->gender = $traveller1->Gender;
                $traveller->email = $traveller1->Email;
                $traveller->phone_number = $traveller1->Telephone;
                $traveller->number_of_bagages = $traveller1->NumberOfBaggages;
                $traveller->number_of_bagages1 = $traveller1->NumberOfBaggages1;
                $traveller->hand_luggages = $traveller1->HandLuggages;
                $traveller->hand_luggages1 = $traveller1->HandLuggages1;
                $traveller->amount_paid = $traveller1->AmountPaid ?? 0;
                $traveller->frequent_flyer_number = $traveller1->FrequentFlyerNumber;
                $traveller->frequent_flyer_airline = $traveller1->FrequentFlyerAirline;
                $traveller->birth_date = $traveller1->BirthDate;
                $traveller->birth_date_string = $traveller1->BirthDateString;
                $traveller->gender_name = $traveller1->GenderName;
                $traveller->copy = $traveller1;
                if ($traveller->save()) {
                    $add_address = $this->addAirTravellersAddress($traveller1->Address, $booking, $traveller, $user);
                    if (!$add_address) {
                        return 'error-address';
                    }
                    $add_address = $this->addAirTravellerDocuments($traveller1->Documents, $booking, $traveller, $user);
                    if (!$add_address) {
                        return 'error-documents';
                    }
                }
            }
            return true;
        } catch (\Throwable $th) {
            Log::error("Error Adding Booking Air Travellers - {$th->getMessage()}", [$travellers]);
            return false;
        }
    }

    private function addAirTravellersAddress($billing_address, $booking, $air_traveller, $user): bool|string
    {
        try {
            $billing_address = (object)$billing_address;
            $address = new AirTravellerAddress();
            $address->public_id = uuid();
            $address->user_id = $user->id;
            $address->flight_booking_id = $booking->id;
            $address->air_traveller_id = $air_traveller->id;
            $address->contact_name = $billing_address->ContactName;
            $address->contact_email = $billing_address->ContactEmail;
            $address->contact_mobile_number = $billing_address->ContactMobileNo;
            $address->address_line1 = $billing_address->AddressLine1;
            $address->address_line2 = $billing_address->AddressLine2;
            $address->session = $booking->session;
            $address->city = $billing_address->City;
            $address->country_code = $billing_address->CountryCode;
            $address->copy = $billing_address;
            $address->save();
            return true;
        } catch (\Throwable $th) {
            Log::error("Error Adding Air travellers address {$billing_address->ContactEmail} - {$th->getMessage()}", [$billing_address]);
            return false;
        }
    }

    private function addAirTravellerDocuments($documents, $booking, $air_traveller, $user): bool|string
    {
        try {

            foreach ($documents as $key => $documentr) {
                $documentr = (object)$documentr;
                $document = new AirTravellerDocument();
                $document->public_id = uuid();
                $document->user_id = $user->id;
                $document->flight_booking_id = $booking->id;
                $document->air_traveller_id = $air_traveller->id;
                $document->doc_type = $documentr->DocType;
                $document->inner_doc_type = $documentr->InnerDocType;
                $document->doc_id = $documentr->DocID;
                $document->issue_country_code = $documentr->IssueCountryCode;
                $document->issue_location = $documentr->IssueLocation;
                $document->session = $booking->session;
                $document->birth_country_code = $documentr->BirthCountryCode;
                $document->effective_date = $documentr->EffectiveDate;
                $document->expiry_date = $documentr->ExpiryDate;
                $document->birth_date = $documentr->BirthDate;
                $document->copy = $documentr;
                $document->save();
            }

            return true;
        } catch (\Throwable $th) {
            Log::error("Error Adding Air Traveller document - {$th->getMessage()}", [$documents]);
            return false;
        }
    }

    private function addFlightsBookingTicketingDetails($ticket_details, $booking, $user): FlightTicketDetail|string|false
    {
        try {
            foreach ($ticket_details as $ticket_detail) {
                $ticket_detail = (object)$ticket_detail;
                $ticket = new FlightTicketDetail();
                $ticket->public_id = uuid();
                $ticket->user_id = $user->id;
                $ticket->flight_booking_id = $booking->id;
                $ticket->session = $booking->session;
                $ticket->price = nairaToKobo($ticket_detail->Price);
                $ticket->confirmation_code = $ticket_detail->ConfirmationCode;
                $ticket->copy = $ticket_detail;
                $ticket->save();
            }

            $booking->update([
                "price" => nairaToKobo($ticket_details[0]['Price'])
            ]);
            return true;
        } catch (\Throwable $th) {
            Log::error("Error Adding Air Travel Ticket details - {$th->getMessage()}", [$ticket_details]);
            return false;
        }
    }
}
