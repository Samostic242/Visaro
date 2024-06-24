<?php

namespace App\Providers\CustomProviders\V2\Admin;

use App\Interfaces\Repositories\V2\Admin\SupportRepositoryInterface;
use App\Repositories\V2\Admin\SupportRepository;
use Illuminate\Support\ServiceProvider;

class SupportProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(SupportRepositoryInterface::class, SupportRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
