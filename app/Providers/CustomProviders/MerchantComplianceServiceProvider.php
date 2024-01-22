<?php

namespace App\Providers\CustomProviders;

use App\Interfaces\Repositories\MerchantRepositoryInterfaces\MerchantComplianceRepositoryInterface;
use App\Repositories\MerchantRepositories\MerchantComplianceRepository;
use Illuminate\Support\ServiceProvider;

class MerchantComplianceServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MerchantComplianceRepositoryInterface::class, MerchantComplianceRepository::class);
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
