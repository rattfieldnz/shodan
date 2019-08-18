<?php

namespace RattfieldNz\Shodan\Libraries\Curl;

use Curl\Curl as PhpCurl;
use RattfieldNz\Shodan\Libraries\Data\Data;

/**
 * Class Curl.
 *
 * @category PHP
 *
 * @author  Rob Attfield <emailme@robertattfield.com>
 * @license https://github.com/rattfieldnz/shodan/blob/master/LICENSE MIT
 */
class Curl
{
    private $_data;
    private $_defaultHeaders;
    private $_timeout;
    private $_curl;

    /**
     * Curl constructor.
     *
     * Set the needed properties to do a CURL request.
     *
     * @param Data $data    Data to use when executing cURL.
     * @param int  $timeout Timeout in seconds to complete a CURL request. Default is 10.
     *
     * @throws \ErrorException Will throw an exception if PHP ext-curl is not installed.
     */
    public function __construct(Data $data, int $timeout = 10)
    {
        if (!extension_loaded('curl')) {
            throw new \ErrorException(
                'The cURL extensions is not loaded, make sure you have installed the cURL extension: https://php.net/manual/curl.setup.php'
            );
        }

        $this->_curl = new PhpCurl();
        $this->_data = $data;
        $this->_timeout = $timeout;
        $this->_setDefaultHeaders();
    }

    /**
     * Execute a CURL request, and return current object for further processing.
     *
     * @return PhpCurl
     */
    public function execute(): PhpCurl
    {
        $this->_curl->setOpt(CURLOPT_RETURNTRANSFER, true);
        $this->_curl->setOpt(CURLOPT_CONNECTTIMEOUT, $this->_timeout);
        $this->_curl->setOpt(CURLOPT_HTTPHEADER, $this->_defaultHeaders);
        $this->_curl->setOpt(CURLOPT_SSL_VERIFYPEER, false);
        $this->_curl->setOpt(CURLOPT_SSL_VERIFYHOST, false);
        $this->_curl->get($this->_data->shodanApiUrl());

        return $this->_curl;
    }

    /**
     * Get the data retrieved from executing CURL request, in JSON format.
     *
     * @return array
     *
     * @see \RattfieldNz\SafeUrls\Libraries\Curl\Curl->execute().
     */
    public function getData()
    {
        $dataObject = $this->execute();
        $data = [
            'status'   => $dataObject->getHttpStatus(),
            'response' => json_decode($dataObject->response, true),
        ];

        return $data;
    }

    /**
     * Sets the default headers to use for CURL request.
     *
     * @return void
     */
    private function _setDefaultHeaders(): void
    {
        $this->_defaultHeaders = [
            'Content-Type: application/json',
            'Connection: Keep-Alive',
        ];
    }
}
