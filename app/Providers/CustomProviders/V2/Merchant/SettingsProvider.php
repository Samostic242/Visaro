<?php

namespace App\Providers\CustomProviders\V2\Merchant;

use App\Interfaces\Repositories\V2\Merchant\Account\MerchantSettingsInterface;
use App\Repositories\V2\Merchant\Account\MerchantSettingsRepository;
use Illuminate\Support\ServiceProvider;

class SettingsProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(MerchantSettingsInterface::class, MerchantSettingsRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
