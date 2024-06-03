<?php

namespace App\Interfaces\Repositories\V2\Account\Services;

interface FlightRepositoryInterface
{
    public function fetchBookedFlights();

    public function fetchFlightTickets(string $id);

    public function fetchUserFlightTransaction();
}
