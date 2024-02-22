<?php

namespace App\Providers\CustomProviders\V2;

use App\Interfaces\Repositories\V2\Account\Services\BankingRepositoryInterface;
use App\Repositories\V2\Account\Services\BankingRepository;
use Illuminate\Support\ServiceProvider;

class BankingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(BankingRepositoryInterface::class, BankingRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
