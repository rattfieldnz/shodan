<?php

namespace RattfieldNz\Shodan;

use Illuminate\Support\ServiceProvider;

class ShodanServiceProvider extends ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/shodan.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('shodan.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'shodan'
        );

        $this->app->bind('shodan', function () {
            return new Shodan();
        });
    }
}
