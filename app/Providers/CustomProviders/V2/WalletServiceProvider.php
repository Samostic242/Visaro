<?php

namespace App\Providers\CustomProviders\V2;

use App\Interfaces\Repositories\V2\Account\Profile\WalletRepositoryInterface;
use App\Repositories\V2\Account\Profile\WalletRepository;
use Illuminate\Support\ServiceProvider;

class WalletServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(WalletRepositoryInterface::class, WalletRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
