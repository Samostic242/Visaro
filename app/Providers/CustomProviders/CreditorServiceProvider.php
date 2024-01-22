<?php

namespace App\Providers\CustomProviders;

use App\Interfaces\Repositories\CreditorRepositoryInterfaces\CreditorRepositoryInterface;
use App\Repositories\CreditorRepositories\CreditorRepository;
use Illuminate\Support\ServiceProvider;

class CreditorServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CreditorRepositoryInterface::class, CreditorRepository::class);
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
