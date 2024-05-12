<?php

namespace Gameq3\Providers;

use Illuminate\Support\ServiceProvider;
use Gameq3\Console\Commands\ExampleCommand;
use Gameq3\Console\Commands\MakePackage;
use GameQ3\GameQ3;

class GameQ3ServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {


    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->app->singleton('gameq3', function () {
            return new GameQ3();
        });

    }
}
