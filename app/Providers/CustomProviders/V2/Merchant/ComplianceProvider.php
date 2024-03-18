<?php

namespace App\Providers\CustomProviders\V2\Merchant;

use App\Interfaces\Repositories\V2\Merchant\Account\MerchantComplianceInterface;
use App\Repositories\V2\Merchant\Account\MerchantComplianceRepository;
use Illuminate\Support\ServiceProvider;

class ComplianceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(MerchantComplianceInterface::class, MerchantComplianceRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
