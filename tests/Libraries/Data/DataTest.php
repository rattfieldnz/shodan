<?php

declare(strict_types=1);

namespace RattfieldNz\Shodan\Tests\Libraries\Data;

use RattfieldNz\Shodan\Libraries\Config\Config;
use RattfieldNz\Shodan\Libraries\Data\Data;
use RattfieldNz\Shodan\Tests\TestCase;

class DataTest extends TestCase
{
    private $_url;
    private $_data;
    private $_mock;

    public function setUp(): void
    {
        parent::setUp();

        $this->_url = 'https://www.robertattfield.com';

        $this->_data = new Data($this->_url);

        $this->assertEquals($this->_url, $this->_data->getUrl());
    }

    public function testShodanApiUrl()
    {
        $expected = 'https://api.shodan.io/shodan/host/104.28.26.171?key='.
            Config::shodanApiKey();
        $actual = $this->_data->shodanApiUrl();
        $this->assertEquals($expected, $actual);
    }

    public function testGetIp()
    {
        $expected = '104.28.26.171';
        $actual = $this->_data->getIp($this->_url);
        $this->assertEquals($expected, $actual);
    }

    public function testGetUrl()
    {
        $expected = $this->_url;
        $actual = $this->_data->getUrl();
        $this->assertEquals($expected, $actual);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
