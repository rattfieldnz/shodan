<?php

declare(strict_types=1);

namespace RattfieldNz\Shodan\Tests\Libraries\Curl;

use RattfieldNz\Shodan\Libraries\Curl\Curl;
use RattfieldNz\Shodan\Libraries\Data\Data;
use RattfieldNz\Shodan\Tests\TestCase;

class CurlTest extends TestCase
{
    private $_url;
    private $_ip;
    private $_data;
    private $_curl;

    protected function setUp(): void
    {
        try {
            $this->_url = 'https://www.robertattfield.com';
            $domain = parse_url($this->_url)['host'];
            $this->_ip = gethostbyname($domain);

            $this->_data = new Data($this->_url);
            $this->_curl = new Curl($this->_data);

            parent::setUp();
        } catch (\ErrorException $e) {
            $this->fail('Curl creation failed. Error message: '.$e->getMessage());
        }
    }

    public function testApiCall()
    {
        $data = json_encode($this->_curl->getData());
        $data = json_decode($data);

        $this->assertEquals(200, $data->status);
        $this->assertEquals(null, $data->response->city);
        $this->assertEquals(null, $data->response->region_code);
        $this->assertEquals(null, $data->response->os);
        $this->assertEquals([], $data->response->tags);
        $this->assertEquals('Cloudflare', $data->response->isp);
        $this->assertEquals(null, $data->response->area_code);
        $this->assertEquals(null, $data->response->dma_code);
        $this->assertEquals('USA', $data->response->country_code3);
        $this->assertEquals('United States', $data->response->country_name);
        $this->assertEquals([], $data->response->hostnames);
        $this->assertEquals(null, $data->response->postal_code);
        $this->assertEquals(-97.822, $data->response->longitude);
        $this->assertEquals('US', $data->response->country_code);
        $this->assertEquals(37.751000000000005, $data->response->latitude);
        $this->assertEquals('Cloudflare', $data->response->org);
        $this->assertNotEmpty($data->response->data);
    }

    public function testApiCallHttpErrorNoShodanApiKey()
    {
        $originalEnv = config('shodan.shodan.api_key');

        config(['shodan.shodan.api_key' => null]);

        $expected = [
            "status" => 401,
            "response" => [
                "message" => "HTTP/1.1 401 Unauthorized"
            ]
        ]; // Shodan HTTP status if no valid key.

        $actual = $this->_curl->getData();

        $this->assertEquals($expected, $actual);

        config(['shodan.shodan.api_key' => $originalEnv]);

    }

    public function testPhpCurlExtensionLoaded()
    {
        $this->assertTrue(extension_loaded('curl'));
    }
}
