<?php

namespace RattfieldNz\Shodan\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class ShodanFacade
 *
 * @category PHP
 *
 * @author  Rob Attfield <emailme@robertattfield.com>
 * @license https://github.com/rattfieldnz/shodan/blob/master/LICENSE MIT
 *
 * @package RattfieldNz\Shodan\Facades
 */
class ShodanFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'shodan';
    }
}
