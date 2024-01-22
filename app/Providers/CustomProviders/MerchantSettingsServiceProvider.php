<?php

namespace App\Providers\CustomProviders;

use App\Interfaces\Repositories\MerchantRepositoryInterfaces\MerchantSettingsRepositoryInterface;
use App\Repositories\MerchantRepositories\MerchantSettingsRepository;
use Illuminate\Support\ServiceProvider;

class MerchantSettingsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MerchantSettingsRepositoryInterface::class, MerchantSettingsRepository::class);
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
