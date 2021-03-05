<?php

declare(strict_types=1);

namespace RattfieldNz\Shodan\Tests;

use RattfieldNz\Shodan\Libraries\Data\Data;
use RattfieldNz\Shodan\Shodan;

class ShodanTest extends TestCase
{
    private $_url;

    private $_data;

    private $_shodan;

    protected function setUp(): void
    {
        parent::setUp();
        $this->_url = 'https://shodan.io';
        $this->_data = new Data($this->_url);
        $this->_shodan = new Shodan();
    }

    public function testSetUrl()
    {
        $this->_shodan->setUrl($this->_url);

        $expected = $this->_url;
        $actual = $this->_shodan->getUrl();

        $this->assertEquals($expected, $actual);
    }

    public function testGetUrl()
    {
        $this->_shodan->setUrl($this->_url);

        $expected = $this->_url;
        $actual = $this->_shodan->getUrl();

        $this->assertEquals($expected, $actual);
    }

    public function testCheck()
    {
        $data = $this->_shodan->setUrl($this->_url)->check()->getResults(true);
        $data = json_decode($data);

        $this->assertEquals(200, $data->status);
        $this->assertEquals(null, $data->response->city);
        $this->assertEquals(null, $data->response->region_code);
        $this->assertEquals(null, $data->response->os);
        $this->assertEquals([], $data->response->tags);
        $this->assertEquals('Cloudflare', $data->response->isp);
        $this->assertEquals(null, $data->response->area_code);
        $this->assertEquals(null, $data->response->dma_code);
        $this->assertEquals(null, $data->response->country_code3);
        $this->assertEquals('United States', $data->response->country_name);
        $this->assertEquals([], $data->response->hostnames);
        $this->assertEquals(null, $data->response->postal_code);
        $this->assertEquals(-97.822, $data->response->longitude);
        $this->assertEquals('US', $data->response->country_code);
        $this->assertEquals(37.751000000000005, $data->response->latitude);
        $this->assertEquals('Cloudflare', $data->response->org);
        $this->assertNotEmpty($data->response->data);
    }

    public function testCheckReturnsHttp500()
    {
        $this->_url = '';

        $data = $this->_shodan->setUrl($this->_url)
            ->check()
            ->getResults();

        $expected = [
            'status'   => 500,
            'response' => 'URL cannot be null.',
        ];

        $this->assertEquals($expected, $data);
    }

    public function testCheckNullResults()
    {
        $data = $this->_shodan->getResults();

        $this->assertNull($data);
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }
}
