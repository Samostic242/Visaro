<?php

namespace App\Providers\CustomProviders\V2\Commerce;

use App\Interfaces\Repositories\V2\Commerce\AttributeRepositoryInterface;
use App\Repositories\V2\Commerce\AttributeRepository;
use Illuminate\Support\ServiceProvider;

class AttributeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(AttributeRepositoryInterface::class, AttributeRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
