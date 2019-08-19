<?php

namespace RattfieldNz\Shodan;

use ErrorException;
use RattfieldNz\Shodan\Libraries\Curl\Curl;
use RattfieldNz\Shodan\Libraries\Data\Data;

/**
 * Class Shodan.
 *
 * @category PHP
 *
 * @author  Rob Attfield <emailme@robertattfield.com>
 * @license https://github.com/rattfieldnz/shodan/blob/master/LICENSE MIT
 */
class Shodan
{
    private $_url;

    private $_results;

    private $_data;

    public function __construct()
    {
        $this->_results = null;
    }

    /**
     * Add URL to be checked with Shodan API.
     *
     * @param string $url The URL to be checked.
     *
     * @return Shodan.
     */
    public function setUrl(string $url)
    {
        $this->_url = $url;
        $this->_data = new Data($this->_url);

        return $this;
    }

    /**
     * Checks a given URL with Shodan API.
     *
     * @throws ErrorException
     *
     * @return Shodan
     */
    public function check()
    {
        $error = [
            'status'   => 500,
            'response' => 'URL cannot be null.',
        ];

        $this->_results = empty($this->getUrl()) || empty($this->_data) ?
            $error : (new Curl($this->_data))->getData();

        return $this;
    }

    /**
     * Get current URL.
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->_url;
    }

    /**
     * Get results of Shodan API call.
     *
     * @param bool $jsonEncode Encode results as JSON, or
     *                         return as associative array.
     *
     * @return mixed|null
     */
    public function getResults(bool $jsonEncode = false)
    {
        if (empty($this->_results)) {
            return null;
        }

        return $jsonEncode === false ?
            $this->_results : json_encode($this->_results);
    }
}
