<?php

namespace App\Providers\CustomProviders\V2\Commerce;

use App\Interfaces\Repositories\V2\Commerce\ProductRepositoryInterface;
use App\Repositories\V2\Commerce\ProductRepository;
use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
