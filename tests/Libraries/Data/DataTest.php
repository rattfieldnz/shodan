<?php

declare(strict_types=1);

namespace RattfieldNz\Shodan\Tests\Libraries\Data;

use RattfieldNz\Shodan\Libraries\Config\Config;
use RattfieldNz\Shodan\Libraries\Data\Data;
use RattfieldNz\Shodan\Tests\TestCase;

class DataTest extends TestCase
{
    private $_url;
    private $_ip;
    private $_data;
    private $_mock;

    public function setUp(): void
    {
        parent::setUp();

        $this->_url = 'https://shodan.io';

        $domain = parse_url($this->_url)['host'];
        $this->_ip = gethostbyname($domain);
        $this->_ip = filter_var($this->_ip, FILTER_VALIDATE_IP) ? $this->_ip : null;

        $this->_data = new Data($this->_url);

        $this->assertEquals($this->_url, $this->_data->getUrl());
    }

    public function testShodanApiUrl()
    {
        $expected = 'https://api.shodan.io/shodan/host/'.$this->_ip.'?key='.
            Config::shodanApiKey();
        $actual = $this->_data->shodanApiUrl();
        $this->assertEquals($expected, $actual);
    }

    public function testGetIp()
    {
        $expected = $this->_ip;
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
