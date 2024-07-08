<?php

namespace App\Providers\CustomProviders\V2\Admin;

use App\Interfaces\Repositories\V2\Admin\MerchantRepositoryInterface;
use App\Repositories\V2\Admin\MerchantRepository;
use Illuminate\Support\ServiceProvider;

class MerchantProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(MerchantRepositoryInterface::class, MerchantRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

    }
}
