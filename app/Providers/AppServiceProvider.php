<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment('local')) {
            $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
            $this->app->register(TelescopeServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Custom validation rule for strong password
        Validator::extend('strong_password', function ($attribute, $value, $parameters, $validator) {

            // If the password is less than 8 characters
            if (strlen($value) < 8) {
                return false;
            }

            // At least one uppercase letter
            if (!preg_match('/[A-Z]/', $value)) {
                return false;
            }

            // At least one lowercase letter
            if (!preg_match('/[a-z]/', $value)) {
                return false;
            }

            // At least one special character
            if (!preg_match('/[!@#$%^&*()\-_=+{};:,<.>]/', $value)) {
                return false;
            }

            // At least one numeric character
            if (!preg_match('/[0-9]/', $value)) {
                return false;
            }

            return true;
        });

        // Custom error messages for the strong_password rule
        Validator::replacer('strong_password', function ($message, $attribute, $rule, $parameters) {
            return 'The password must be at least 8 characters and include at least one uppercase letter, one lowercase letter, one numeric character, and one special character.';
        });
    }
}
