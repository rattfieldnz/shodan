<?php

namespace RattfieldNz\Shodan;

use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;

/**
 * Class ShodanServiceProvider.
 * @category PHP
 *
 * @author  Rob Attfield <emailme@robertattfield.com>
 * @license https://github.com/rattfieldnz/shodan/blob/master/LICENSE MIT
 *
 * @package RattfieldNz\Shodan
 */
class ShodanServiceProvider extends ServiceProvider
{
    const CONFIG_PATH = __DIR__.'/../config/shodan.php';

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

        $this->app->alias(Shodan::class, 'shodan');

        $this->app->bind('shodan', function () {
            return new Shodan();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['shodan'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    public function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/shodan.php' => config_path('shodan.php'),
        ], 'shodan');

        // Registering package commands.
        $this->commands(['shodan']);
    }

    /**
     * Merge the given configuration with the existing configuration.
     *
     * @param string $path
     * @param string $key
     *
     * @return void
     */
    protected function mergeConfigFrom($path, $key)
    {
        $config = $this->app['config']->get($key, []);
        $this->app['config']->set($key, $this->mergeConfig($config, require $path));
    }

    /**
     * Merges the configs together and takes multi-dimensional arrays into account.
     *
     * @param array $original
     * @param array $merging
     *
     * @return array
     */
    protected function mergeConfig(array $original, array $merging)
    {
        $array = array_merge($original, $merging);
        foreach ($original as $key => $value) {
            if (!is_array($value)) {
                continue;
            }
            if (!Arr::exists($merging, $key)) {
                continue;
            }
            if (is_numeric($key)) {
                continue;
            }
            $array[$key] = $this->mergeConfig($value, $merging[$key]);
        }

        return $array;
    }
}
