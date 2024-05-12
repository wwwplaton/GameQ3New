<?php

namespace GameQ3\GameQ3;

use Illuminate\Support\Facades\Facade;


class LaravelGameQ3Facade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'gameq3';
    }
}
