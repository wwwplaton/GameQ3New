<?php

namespace Gameq3\Providers;

use Illuminate\Support\ServiceProvider;
use Gameq3\Console\Commands\ExampleCommand;
use Gameq3\Console\Commands\MakePackage;

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

        if ($this->app->runningInConsole()) {
            $this->commands([
                ExampleCommand::class,
                
            ]);
        }

    }
}
