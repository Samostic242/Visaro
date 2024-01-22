<?php

namespace App\Providers\CustomProviders;

use App\Interfaces\Repositories\CreditRepositoryInterfaces\CreditRequestRepositoryInterface;
use App\Repositories\CreditRepositories\CreditRequestRepository;
use Illuminate\Support\ServiceProvider;

class CreditRequestServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CreditRequestRepositoryInterface::class, CreditRequestRepository::class);
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
