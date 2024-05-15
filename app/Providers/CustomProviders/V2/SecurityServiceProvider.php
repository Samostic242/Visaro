<?php

namespace App\Providers\CustomProviders\V2;

use App\Interfaces\Repositories\V2\Account\Security\UserSecurityRepositoryInterface;
use App\Repositories\V2\Account\Security\UserSecurityRepository;
use Illuminate\Support\ServiceProvider;

class SecurityServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(UserSecurityRepositoryInterface::class, UserSecurityRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
