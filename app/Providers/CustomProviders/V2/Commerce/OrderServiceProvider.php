<?php

namespace App\Providers\CustomProviders\V2\Commerce;

use App\Interfaces\Repositories\V2\Commerce\OrderRepositoryInterface;
use App\Repositories\V2\Commerce\OrderRepository;
use Illuminate\Support\ServiceProvider;

class OrderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
