<?php

namespace App\Providers\CustomProviders\V2;

use App\Interfaces\Repositories\V2\Onboarding\RegistrationRepositoryInterface;
use App\Repositories\V2\Onboarding\Registration\RegistrationRepository;
use Illuminate\Support\ServiceProvider;

class RegistrationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(RegistrationRepositoryInterface::class, RegistrationRepository::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //

    }
}
