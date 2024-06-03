<?php

namespace App\Repositories\V2\Account\Services;

use App\Interfaces\Repositories\V2\Account\Services\FlightRepositoryInterface;
use App\Models\BookedFlight;
use App\Models\Flight;
use App\Models\UserTransaction;

class FlightRepository implements FlightRepositoryInterface
{
    public function fetchBookedFlights()
    {
        $id = auth()->id();
        $flights = BookedFlight::whereUserId($id)->get();
        return $flights;
    }

    public function fetchFlightTickets($id){
        $userid = auth()->id();
        $flightsTickets = Flight::where('user_id', $userid)->where('booked_flight_id', $id)->get();
        return $flightsTickets;
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
}
