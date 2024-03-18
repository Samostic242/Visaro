<?php

namespace App\Providers\CustomProviders\V2\Merchant;

use App\Interfaces\Repositories\V2\Merchant\Onboarding\Registration\MerchantRegistrationInterface;
use App\Repositories\V2\Merchant\Onboarding\Registration\MerchantRegistrationRepository;
use Illuminate\Support\ServiceProvider;

class RegistrationProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(MerchantRegistrationInterface::class, MerchantRegistrationRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
