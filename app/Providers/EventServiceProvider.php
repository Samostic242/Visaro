<?php

namespace App\Providers;

use App\Models\Loans\Invoice\Invoice;
use App\Models\Merchant\Onboarding\Merchant;
use App\Models\User;
use App\Observers\InvoiceObserver;
use App\Observers\MerchantObserver;
use App\Observers\UserObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

// use App\Models\Loans\Merchants\Merchant;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];
    protected $observers = [
        Invoice::class => [InvoiceObserver::class],
        User::class => [UserObserver::class],
        Merchant::class => [MerchantObserver::class],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
