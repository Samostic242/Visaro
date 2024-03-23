<?php

namespace App\Providers\CustomProviders\V2\Merchant;

use App\Interfaces\Repositories\V2\Merchant\Onboarding\Verification\MerchantVerificationInterface;
use App\Repositories\V2\Merchant\Onboarding\Verification\MerchantVerificationRepository;
use Illuminate\Support\ServiceProvider;

class VerificationProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(MerchantVerificationInterface::class, MerchantVerificationRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
