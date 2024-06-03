<?php

namespace App\Providers\CustomProviders\V2\Flight;

use App\Interfaces\Repositories\V2\Account\Services\FlightRepositoryInterface;
use App\Repositories\V2\Account\Services\FlightRepository;
use Illuminate\Support\ServiceProvider;

class FlightProviders extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(FlightRepositoryInterface::class, FlightRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
