<?php

namespace App\Providers\CustomProviders\V2;

use App\Interfaces\Repositories\V2\Auth\AuthenticationRepositoryInterface;
use App\Repositories\V2\Auth\AuthenticationRepository;
use Illuminate\Support\ServiceProvider;

class AuthenticationProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(AuthenticationRepositoryInterface::class, AuthenticationRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
