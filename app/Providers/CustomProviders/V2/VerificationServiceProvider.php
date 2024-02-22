<?php

namespace App\Providers\CustomProviders\V2;

use App\Interfaces\Repositories\V2\Onboarding\VerificationRepositoryInterface;
use App\Repositories\V2\Onboarding\Verification\VerificationRepository;
use Illuminate\Support\ServiceProvider;

class VerificationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(VerificationRepositoryInterface::class, VerificationRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
