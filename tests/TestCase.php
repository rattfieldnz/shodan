<?php

namespace RattfieldNz\Shodan\Tests;

use Illuminate\Foundation\Application;
use Orchestra\Testbench\TestCase as Orchestra;
use RattfieldNz\Shodan\Facades\ShodanFacade;
use RattfieldNz\Shodan\ShodanServiceProvider;

abstract class TestCase extends Orchestra
{
    /**
     * Load package service provider.
     *
     * @param Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [ShodanServiceProvider::class];
    }

    /**
     * Load package alias.
     *
     * @param Application $app
     *
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'Shodan' => ShodanFacade::class,
        ];
    }
}
