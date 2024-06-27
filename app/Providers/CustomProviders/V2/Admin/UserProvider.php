<?php

namespace App\Providers\CustomProviders\V2\Admin;

use App\Interfaces\Repositories\V2\Admin\UserRepositoryInterface;
use App\Repositories\V2\Admin\UserRepository;
use Illuminate\Support\ServiceProvider;

class UserProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }

    /** 
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
