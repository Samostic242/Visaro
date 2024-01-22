<?php

namespace App\Providers\CustomProviders;

use App\Interfaces\Repositories\InvoiceRepositoryInterfaces\InvoiceRepositoryInterface;
use App\Repositories\InvoiceRepositories\InvoiceRepository;
use Illuminate\Support\ServiceProvider;

class InvoiceServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(InvoiceRepositoryInterface::class, InvoiceRepository::class);
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
