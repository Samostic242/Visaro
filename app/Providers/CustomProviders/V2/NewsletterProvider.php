<?php

namespace App\Providers\CustomProviders\V2;

use App\Interfaces\Repositories\V2\Newsletter\NewsletterRepositoryInterface;
use App\Repositories\V2\Newsletter\NewsletterRepository;
use Illuminate\Support\ServiceProvider;

class NewsletterProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(NewsletterRepositoryInterface::class, NewsletterRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
