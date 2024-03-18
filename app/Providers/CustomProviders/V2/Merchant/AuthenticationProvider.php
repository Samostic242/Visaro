<?php

namespace App\Providers\CustomProviders\V2\Merchant;

use App\Interfaces\Repositories\V2\Merchant\Auth\MerchantAuthenticationInterface;
use App\Repositories\V2\Merchant\Auth\MerchantAuthenticationRepository;
use Illuminate\Support\ServiceProvider;

class AuthenticationProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(MerchantAuthenticationInterface::class, MerchantAuthenticationRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
