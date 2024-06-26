<?php

namespace App\Providers\CustomProviders\V2\Admin;

use App\Interfaces\Repositories\V2\Admin\NotificationRepositoryInterface;
use App\Repositories\V2\Admin\NotificationRepository;
use Illuminate\Support\ServiceProvider;

class NotificationProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(NotificationRepositoryInterface::class, NotificationRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
