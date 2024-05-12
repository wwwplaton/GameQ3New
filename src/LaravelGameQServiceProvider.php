<?php

namespace GameQ3\GameQ3;

use Illuminate\Support\ServiceProvider;

class LaravelGameQ3ServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
       //
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Register the main class to use with the facade
        $this->app->singleton('gameq3', function () {
            return new LaravelGameQ3();
        });
    }
}
