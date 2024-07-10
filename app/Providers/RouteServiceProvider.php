<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;


class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {

        // resolve(\Illuminate\Routing\UrlGenerator::class)->forceScheme('https');

        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            // Route::prefix('api/v1/aviation')
            //     ->middleware(['api', 'auth:api', 'checkUserStatus'])
            //     ->namespace($this->namespace)
            //     ->group(base_path('routes/services/aviation.php'));

            // Route::prefix('api/v1/bnpl/creditors')
            //     ->middleware(['api', 'auth:api', 'checkUserStatus'])
            //     ->namespace($this->namespace)
            //     ->group(base_path('routes/api/v1/loan/creditors.php'));

            // Route::prefix('api/v1/bnpl/merchants')
            //     ->middleware(['api', 'auth:api', 'checkUserStatus'])
            //     ->namespace($this->namespace)
            //     ->group(base_path('routes/api/v1/loan/merchants.php'));

            // Route::prefix('api/v1/bnpl/credits')
            //     ->middleware(['api', 'auth:api', 'checkUserStatus'])
            //     ->namespace($this->namespace)
            //     ->group(base_path('routes/api/v1/loan/credit.php'));

            // Route::prefix('api/v1/bnpl/transactions')
            //     ->middleware(['api', 'auth:api', 'checkUserStatus'])
            //     ->namespace($this->namespace)
            //     ->group(base_path('routes/api/v1/loan/transactions.php'));

            // Route::prefix('api/v1/auth')
            //     ->middleware(['api'])
            //     ->namespace($this->namespace)
            //     ->group(base_path('routes/api/v1/auth/auth.php'));


            Route::prefix('api/v2/auth')
                ->middleware(['api'])
                ->namespace($this->namespace)
                ->group(base_path('routes/api/v2/auth/auth.php'));

            Route::prefix('api/v2/onboarding')
                ->middleware(['api'])
                ->namespace($this->namespace)
                ->group(base_path('routes/api/v2/onboarding/registration.php'));

            Route::prefix('api/v2/newsletter')
                ->middleware(['api'])
                ->namespace($this->namespace)
                ->group(base_path('routes/api/v2/newsletter/public.php'));

            Route::prefix('api/v2/account')
                ->middleware(['api'])
                ->namespace($this->namespace)
                ->group(base_path('routes/api/v2/account/services.php'));

            Route::prefix('api/v2/account')
                ->middleware(['api'])
                ->namespace($this->namespace)
                ->group(base_path('routes/api/v2/account/account.php'));

            Route::prefix('api/v2/admin')
                ->middleware(['api'])
                ->namespace($this->namespace)
                ->group(base_path('routes/api/v2/admin/banks.php'));

            Route::prefix('api/v2/admin')
                // ->middleware(['admin'])
                ->namespace($this->namespace)
                ->group(base_path('routes/api/v2/admin/admin.php'));

            Route::prefix('api/v2/partner')
                ->namespace($this->namespace)
                ->group(base_path('routes/api/v2/partner/partner.php'));

            Route::prefix('api/v2/merchant')
              /*   ->middleware(['api']) */
                ->namespace($this->namespace)
                ->group(base_path('routes/api/v2/merchant/merchant.php'));

            Route::prefix('api/v2/merchant')
                ->middleware(['api'])
                ->namespace($this->namespace)
                ->group(base_path('routes/api/v2/merchant/account.php'));

            Route::prefix('api/v2/merchant')
                ->namespace($this->namespace)
                ->group(base_path('routes/api/v2/merchant/auth.php'));

            Route::prefix('api/v2/commerce')
                ->namespace($this->namespace)
                ->group(base_path('routes/api/v2/commerce/commerce.php'));

            Route::prefix('api/v2/aviation')
                ->middleware(['api', 'auth:api'])
                ->namespace($this->namespace)
                ->group(base_path('routes/services/aviation.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
