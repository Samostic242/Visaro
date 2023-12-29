<?php

namespace App\Providers\CustomProviders;

use App\Interfaces\Repositories\CreditorRepositoryInterfaces\CreditorConditionsRepositoryInterface;
use App\Repositories\CreditorRepositories\CreditorConditionsRepository;
use Illuminate\Support\ServiceProvider;

class CreditorConditionsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CreditorConditionsRepositoryInterface::class, CreditorConditionsRepository::class);
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
