<?php

namespace App\Providers\CustomProviders\V2\Commerce;

use App\Interfaces\Repositories\V2\Commerce\SkusRepositoryInterface;
use App\Repositories\V2\Commerce\SkusRepository;
use Illuminate\Support\ServiceProvider;

class SkuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(SkusRepositoryInterface::class, SkusRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
