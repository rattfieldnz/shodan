<?php

namespace RattfieldNz\Shodan\Libraries\Config;

/**
 * Class Config.
 *
 * @category PHP
 *
 * @author  Rob Attfield <emailme@robertattfield.com>
 * @license https://github.com/rattfieldnz/shodan/blob/master/LICENSE MIT
 *
 * @package RattfieldNz\Shodan\Libraries\Config
 */
class Config
{
    // Default timeout for API call.
    public const DEFAULT_TIMEOUT = 10;

    /**
     * Retrieve the Shodan API key.
     *
     * @return mixed|string|null The Google API key.
     */
    public static function shodanApiKey()
    {
        $key = config('shodan.shodan.api_key');

        return !empty($key) ? $key : env('SHODAN_API_KEY');
    }

    /**
     * Retrieve set CURL timeout from config, in seconds.
     *
     * @return int CURL timeout. Default is 10.
     */
    public static function curlTimeout(): int
    {
        $timeout = config('shodan.shodan.timeout');

        return !empty($timeout) ? intval($timeout) : self::DEFAULT_TIMEOUT;
    }
}
