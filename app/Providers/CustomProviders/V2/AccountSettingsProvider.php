<?php

namespace App\Providers\CustomProviders\V2;

use App\Interfaces\Repositories\V2\Account\Settings\SettingsRepositoryInterface;
use App\Repositories\V2\Account\Settings\SettingsRepository;
use Illuminate\Support\ServiceProvider;

class AccountSettingsProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(SettingsRepositoryInterface::class, SettingsRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
