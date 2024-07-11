<?php

namespace App\Http\Controllers\Api\V2\Account\Services;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\Services\Aviation\TicketResource;
use App\Http\Resources\V2\Account\Services\Installment\InstallmentResource;
use App\Interfaces\Repositories\V2\Account\Services\FlightRepositoryInterface;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    function __construct(
        protected FlightRepositoryInterface $flightRepository
    ){}

    /**
     * Fetches User Booked Flights
     */
    public function getBookedFlights(){
        if(!$flights = $this->flightRepository->fetchBookedFlights()){
            return respondError(404, '01', 'No Booked Flight Yet');
        }
        return respondSuccess('Booked Flights Returned Successfully', $flights);
    }

    /**
     * Fetches User Flight Tickets
     */
    public function getFlightDetails($id){
        $flight = $this->flightRepository->fetchFlightTickets($id);
        return $flight;
     /*    if(!$flight = $this->flightRepository->fetchFlightTickets($id)){
            return respondError(404, '01', 'Flights Not Found');
        }
        return respondSuccess('Flight Details Returned Successfully', TicketResource::collection($flight)); */
    }

    public function fetchUserFlightTransaction(){
        if(!$transactions = $this->flightRepository->fetchUserFlightTransaction()){
            return respondError(404, '01', 'Transactions Not Found');
        }
        return respondSuccess('Booked Flights Returned Successfully', $transactions);
    }

    public function getInstallmentPlan()
    {
        $installments = $this->flightRepository->getInstallmentPlans();
        if($installments->isEmpty()){
            return respondError(404, '01', 'No installment plan yet');
        }
        // return respondSuccess('Installment Fetched Successfully', $installments);

        return respondSuccess('Installment Fetched Successfully', InstallmentResource::collection($installments));
    }

    public function getLoansRequest()
    {
        if(!$loan = $this->flightRepository->getLoansPlans()){
            return respondError(404, '01', 'loan Not Found');
        }
        return respondSuccess('Loan plan returned successfully', $loan);
    }

}
