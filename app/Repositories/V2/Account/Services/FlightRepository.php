<?php

namespace App\Repositories\V2\Account\Services;

use App\Http\Integrations\Trips\Requests\FetchBookedFlight;
use App\Http\Integrations\Trips\TripsConnection;
use App\Http\Resources\V1\Services\Aviation\TicketResource;
use App\Interfaces\Repositories\V2\Account\Services\FlightRepositoryInterface;
use App\Models\BookedFlight;
use App\Models\Flight;
use App\Models\FlightBooking;
use App\Models\PaymentInstallment;
use App\Models\UserTransaction;
use Illuminate\Support\Facades\Log;
use Saloon\Http\Response;

class FlightRepository implements FlightRepositoryInterface
{
    public function fetchBookedFlights()
    {
        $id = auth()->id();
        $flights = BookedFlight::whereUserId($id)->get();
        return $flights;
    }

    public function fetchFlightTickets($id)
    {
        $userid = auth()->id();
        $flightsTickets = Flight::where('user_id', $userid)->where('flight_booking_id', $id)->get();
        if($flightsTickets->isEmpty())
        {
            $booking = FlightBooking::where('id', $id)->first();
            $data = [
                'referenceType' => 0,
                'surname' => $booking['copy']['PassengerDetails']['AirTravellers'][0]['LastName'],
                'referenceId' => $booking->confirmation_code,
            ];
            $trips = new TripsConnection();
            $response = $trips->send(new FetchBookedFlight($data));
            $response->onError(function (Response $resp) {
                Log::info('Fetch Booked Flight Ticket', [$resp]);
                return false;
            });
            $result = $response->json();
            if(isset($result['BookingReferenceId']) && $result['BookingReferenceId'] !== null)
            {
                if($store = saveBookedFlightOnTrips($booking, $result)){
                    $update_booking = $this->updateBookingToBooked($booking);
                    return respondSuccess('Flight Details Returned Successfully', TicketResource::collection($store->tickets));
                }
            return respondError(400, '01', 'Error Fetching Ticket, Invalid ticket ID');
            }
        }
        return respondSuccess('Flight Details Returned Successfully', TicketResource::collection($flightsTickets));
        ;
    }

    public function fetchUserFlightTransaction(){
        $id = auth()->id();
        $transactions = UserTransaction::where('user_id', $id)->get();
        return $transactions;
    }

    public function fetchFlight($id){
        $flight = Flight::where('id', $id)->first();
        return $flight;
    }

    public function fetchFlightByUserId($id){
        $flight = Flight::where('user_id', $id)->first();
        return $flight;
    }

    private function updateBookingToBooked(FlightBooking $booking): FlightBooking|false
    {
        try {
            $booking->status = 'booked';
            $booking->save();
            return $booking;
        } catch (\Throwable $th) {
            Log::error("Error updating Booking to  booked - {$th->getMessage()}");
            return false;
        }
    }

    public function getInstallmentPlans()
    {
        $data = PaymentInstallment::whereUserId(auth()->id())->with('flightbooking.flights')->get();
        return $data;
    }

   /*  public function getUserTransactions()
    {
        $data = UserTransaction::whereUserId(auth()->id())->with('flightbooking.flight')->get();
        return $data;
    } */

   /*  public function getFlightBooking()
    {
        return $data;
    } */

}
