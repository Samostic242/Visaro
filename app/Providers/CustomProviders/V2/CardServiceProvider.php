<?php

namespace App\Providers\CustomProviders\V2;

use App\Interfaces\Repositories\V2\Account\Services\CardRepositoryInterface;
use App\Repositories\V2\Account\Services\CardRepository;
use Illuminate\Support\ServiceProvider;

class CardServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(CardRepositoryInterface::class, CardRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
