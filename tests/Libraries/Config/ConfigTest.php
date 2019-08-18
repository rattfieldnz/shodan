<?php

declare(strict_types=1);

namespace RattfieldNz\Shodan\Tests\Libraries\Config;

use RattfieldNz\Shodan\Libraries\Config\Config;
use RattfieldNz\Shodan\Tests\TestCase;

class ConfigTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * Test Google API key from config file.
     */
    public function testShodanApiKey()
    {
        $expected = env('SHODAN_API_KEY');
        $actual = Config::shodanApiKey();

        $this->assertEquals($expected, $actual);
    }

    /**
     * Test Google API Curl Timeout from config file.
     */
    public function testCurlTimeout()
    {
        $expected = env('SHODAN_REQUEST_TIMEOUT');
        $actual = Config::curlTimeout();

        $this->assertEquals($expected, $actual);
    }
}
