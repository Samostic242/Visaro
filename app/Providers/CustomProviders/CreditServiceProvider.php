<?php

namespace App\Providers\CustomProviders;

use App\Interfaces\Repositories\CreditRepositoryInterfaces\CreditRepositoryInterface;
use App\Repositories\CreditRepositories\CreditRepository;
use Illuminate\Support\ServiceProvider;

class CreditServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CreditRepositoryInterface::class, CreditRepository::class);
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
