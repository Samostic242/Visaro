<?php

namespace App\Providers\CustomProviders\V2\Admin;

use App\Interfaces\Repositories\V2\Admin\AuthRepositoryInterface;
use App\Repositories\V2\Admin\AuthRepository;
use Illuminate\Support\ServiceProvider;

class AuthProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(AuthRepositoryInterface::class, AuthRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

    }
}
