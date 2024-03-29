<?php

namespace App\Providers\CustomProviders\V2\Commerce;

use App\Interfaces\Repositories\V2\Commerce\StoreFrontRepositoryInterface;
use App\Repositories\V2\Commerce\StoreFrontRepository;
use Illuminate\Support\ServiceProvider;

class StoreFrontServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(StoreFrontRepositoryInterface::class, StoreFrontRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
