<?php

namespace App\Providers\CustomProviders;

use App\Interfaces\Repositories\CreditRepositoryInterfaces\CreditInstallmentsRepositoryInterface;
use App\Repositories\CreditRepositories\CreditInstallmentsRepository;
use Illuminate\Support\ServiceProvider;

class CreditInstallmentsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CreditInstallmentsRepositoryInterface::class, CreditInstallmentsRepository::class);
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
