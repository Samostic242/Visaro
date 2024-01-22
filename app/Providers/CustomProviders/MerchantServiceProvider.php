<?php

namespace App\Providers\CustomProviders;

use App\Interfaces\Repositories\MerchantRepositoryInterfaces\MerchantRepositoryInterface;
use App\Repositories\MerchantRepositories\MerchantRepository;
use Illuminate\Support\ServiceProvider;

class MerchantServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MerchantRepositoryInterface::class, MerchantRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
