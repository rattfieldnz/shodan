<?php

namespace RattfieldNz\Shodan\Facades;

use Illuminate\Support\Facades\Facade;

class ShodanFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'shodan';
    }
}
