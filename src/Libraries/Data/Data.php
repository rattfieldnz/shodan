<?php

namespace RattfieldNz\Shodan\Libraries\Data;

use RattfieldNz\Shodan\Libraries\Config\Config;

/**
 * Class Data.
 *
 * @category PHP
 *
 * @author  Rob Attfield <emailme@robertattfield.com>
 * @license https://github.com/rattfieldnz/shodan/blob/master/LICENSE MIT
 */
class Data
{
    private $_ip;
    private $_url;

    public function __construct(string $url)
    {
        $this->_url = $url;
        $this->_ip = $this->getIp($this->_url);
    }

    /**
     * Get Shodan API URL with key.
     *
     * @return string
     */
    public function shodanApiUrl()
    {
        return 'https://api.shodan.io/shodan/host/'.$this->_ip.'?key='.
            Config::shodanApiKey();
    }

    /**
     * Get IPv4 address from a URL.
     *
     * @param string $url
     *
     * @return string|null
     */
    public function getIp(string $url): string
    {
        $domain = parse_url($url)['host'];
        $ip = gethostbyname($domain);

        return filter_var($ip, FILTER_VALIDATE_IP) ? $ip : null;
    }

    /**
     * Returns URL set when initialising Data object.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->_url;
    }
}
