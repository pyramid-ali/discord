<?php

namespace Alish\Discord\Facade;

use Illuminate\Support\Facades\Facade;


class Discord extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'discord';
    }
}
