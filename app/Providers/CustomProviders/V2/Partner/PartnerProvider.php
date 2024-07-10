<?php

namespace App\Providers\CustomProviders\V2\Partner;

use App\Interfaces\Repositories\V2\Admin\PartnerRepositoryInterface;
use App\Repositories\V2\Admin\PartnerRepository;
use Illuminate\Support\ServiceProvider;

class PartnerProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(PartnerRepositoryInterface::class, PartnerRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
