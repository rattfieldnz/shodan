## Example with input and output (associative array)

`Shodan::setUrl('https://github.com')->check()->getResults()` returns the following associative array:

```php
[
  "status" => 200,
  "response" => [
    "region_code" => "02",
    "tags" => [
	  "cloud"
	],
    "ip" => 876637279,
    "area_code" => null,
    "latitude" => -33.8612,
    "hostnames" => [
	  "ec2-52-64-108-95.ap-southeast-2.compute.amazonaws.com"
	],
    "postal_code" => "1001",
    "dma_code" => null,
    "country_code" => "AU",
    "org" => "Amazon.com",
    "data" => [
      [
        "hash" => -1636861384,
        "tags" => [
		  "cloud"
		],
        "ip" => 876637279,
        "isp" => "Amazon.com",
        "transport" => "tcp",
        "data" => """
          0020ERR 
            Repository not found.
          """,
        "asn" => "AS16509",
        "port" => 9418,
        "hostnames" => [
		  "ec2-52-64-108-95.ap-southeast-2.compute.amazonaws.com"
		],
        "location" => [
          "city" => "Sydney",
          "region_code" => "02",
          "area_code" => null,
          "longitude" => 151.1982,
          "country_code3" => "AUS",
          "latitude" => -33.8612,
          "postal_code" => "1001",
          "dma_code" => null,
          "country_code" => "AU",
          "country_name" => "Australia",
        ],
        "timestamp" => "2019-08-19T05:59:45.270104",
        "domains" => [
		  "amazonaws.com"
		],
        "org" => "Amazon.com",
        "os" => null,
        "_shodan" => [
          "crawler" => "5faf2928ceb560cb4276cc1b4660b2d763cc6397",
          "ptr" => true,
          "id" => null,
          "module" => "git",
          "options" => [],
        ]
        "opts" => [],
        "ip_str" => "52.64.108.95",
      ],
      [
        "hash" => -2142196498,
        "tags" => [
		  "cloud"
		],
        "ip" => 876637279,
        "org" => "Amazon.com",
        "isp" => "Amazon.com",
        "transport" => "tcp",
        "data" => """
          HTTP/1.1 301 Moved Permanently
          Content-length: 0
          Location: https://github.com/
          
          """,
        "asn" => "AS16509",
        "port" => 443,
        "ssl" => [
          "dhparams" => null
          "tlsext" => [
            [
              "id" => 65281
              "name" => "renegotiation_info"
            ],
            [
              "id" => 11
              "name" => "ec_point_formats"
            ]
          ],
          "versions" => [
            "-TLSv1",
            "-SSLv2",
            "-SSLv3",
            "-TLSv1.1",
            "TLSv1.2",
            "TLSv1.3",
          ],
          "acceptable_cas" => [],
          "cert" => [
            "sig_alg" => "sha256WithRSAEncryption",
            "issued" => "20180508000000Z",
            "expires" => "20200603120000Z",
            "pubkey" => array:2 [▶],
            "version" => 2,
            "extensions" => [
              [
                "data" => "0\x16\x80\x14=\xd3P\xa5\xd6\xa0\xad\xee\xf3J`\ne\xd3!\xd4\xf8\xf8\xd6\x0f",
                "name" => "authorityKeyIdentifier",
              ],
              [
                "data" => "\x04\x14\xc9\xc2Saf\x9d_\xab%\xf4&\xcd\x0f8\x9a\xa8I\xeaH\xa9",
                "name" => "subjectKeyIdentifier",
              ],
              [
                "data" => "0\x1c\x82\ngithub.com\x82\x0ewww.github.com",
                "name" => "subjectAltName",
              ],
              [
                "critical" => true,
                "data" => "\x03\x02\x05\xa0",
                "name" => "keyUsage",
              ],
              [
                "data" => "0\x14\x06\x08+\x06\x01\x05\x05\x07\x03\x01\x06\x08+\x06\x01\x05\x05\x07\x03\x02",
                "name" => "extendedKeyUsage",
              ],
              [
                "data" => "0l04\xa02\xa00\x86.http://crl3.digicert.com/sha2-ev-server-g2.crl04\xa02\xa00\x86.http://crl4.digicert.com/sha2-ev-server-g2.crl",
                "name" => "crlDistributionPoints",
              ],
              [
                "data" => "0B07\x06\t`\x86H\x01\x86\xfdl\x02\x010*0(\x06\x08+\x06\x01\x05\x05\x07\x02\x01\x16\x1chttps://www.digicert.com/CPS0\x07\x06\x05g\x81\x0c\x01\x01"
                "name" => "certificatePolicies"
              ],
              [
                "data" => "0z0$\x06\x08+\x06\x01\x05\x05\x070\x01\x86\x18http://ocsp.digicert.com0R\x06\x08+\x06\x01\x05\x05\x070\x02\x86Fhttp://cacerts.digicert.com/DigiCertSHA2ExtendedV ▶",
                "name" => "authorityInfoAccess",
              ],
              [
                "critical" => true,
                "data" => "0\x00",
                "name" => "basicConstraints",
              ],
              [
                "data" => "\x04\x82\x01j\x01h\x00v\x00\xa4\xb9\t\x90\xb4\x18X\x14\x87\xbb\x13\xa2\xccgp\n<5\x98\x04\xf9\x1b\xdf\xb8\xe3w\xcd\x0e\xc8\r\xdc\x10\x00\x00\x01cAbm\n\x00\x00\x0 ▶",
                "name" => "ct_precert_scts",
              ]
            ],
            "fingerprint" => [
              "sha256" => "3111500c4a66012cdae333ec3fca1c9dde45c954440e7ee413716bff3663c074",
              "sha1" => "ca06f56b258b7a0d4f2b05470939478651151984",
            ]
            "serial" => 1.3324412563136E+37,
            "issuer" => [
              "C" => "US",
              "OU" => "www.digicert.com",
              "O" => "DigiCert Inc",
              "CN" => "DigiCert SHA2 Extended Validation Server CA",
            ],
            "expired" => false,
            "subject" => [
              "C" => "US",
              "CN" => "github.com",
              "businessCategory" => "Private Organization",
              "jurisdictionST" => "Delaware",
              "serialNumber" => "5157550",
              "L" => "San Francisco",
              "O" => "GitHub, Inc.",
              "ST" => "California",
              "jurisdictionC" => "US",
            ]
          ],
          "cipher" => [
            "version" => "TLSv1/SSLv3",
            "bits" => 128,
            "name" => "ECDHE-RSA-AES128-GCM-SHA256",
          ]
          "chain" => [
            """
              -----BEGIN CERTIFICATE-----
              MIIHQjCCBiqgAwIBAgIQCgYwQn9bvO1pVzllk7ZFHzANBgkqhkiG9w0BAQsFADB1
              MQswCQYDVQQGEwJVUzEVMBMGA1UEChMMRGlnaUNlcnQgSW5jMRkwFwYDVQQLExB3
              d3cuZGlnaWNlcnQuY29tMTQwMgYDVQQDEytEaWdpQ2VydCBTSEEyIEV4dGVuZGVk
              IFZhbGlkYXRpb24gU2VydmVyIENBMB4XDTE4MDUwODAwMDAwMFoXDTIwMDYwMzEy
              MDAwMFowgccxHTAbBgNVBA8MFFByaXZhdGUgT3JnYW5pemF0aW9uMRMwEQYLKwYB
              BAGCNzwCAQMTAlVTMRkwFwYLKwYBBAGCNzwCAQITCERlbGF3YXJlMRAwDgYDVQQF
              Ewc1MTU3NTUwMQswCQYDVQQGEwJVUzETMBEGA1UECBMKQ2FsaWZvcm5pYTEWMBQG
              A1UEBxMNU2FuIEZyYW5jaXNjbzEVMBMGA1UEChMMR2l0SHViLCBJbmMuMRMwEQYD
              VQQDEwpnaXRodWIuY29tMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA
              xjyq8jyXDDrBTyitcnB90865tWBzpHSbindG/XqYQkzFMBlXmqkzC+FdTRBYyneZ
              w5Pz+XWQvL+74JW6LsWNc2EF0xCEqLOJuC9zjPAqbr7uroNLghGxYf13YdqbG5oj
              /4x+ogEG3dF/U5YIwVr658DKyESMV6eoYV9mDVfTuJastkqcwero+5ZAKfYVMLUE
              sMwFtoTDJFmVf6JlkOWwsxp1WcQ/MRQK1cyqOoUFUgYylgdh3yeCDPeF22Ax8AlQ
              xbcaI+GwfQL1FB7Jy+h+KjME9lE/UpgV6Qt2R1xNSmvFCBWu+NFX6epwFP/JRbkM
              fLz0beYFUvmMgLtwVpEPSwIDAQABo4IDeTCCA3UwHwYDVR0jBBgwFoAUPdNQpdag
              re7zSmAKZdMh1Pj41g8wHQYDVR0OBBYEFMnCU2FmnV+rJfQmzQ84mqhJ6kipMCUG
              A1UdEQQeMByCCmdpdGh1Yi5jb22CDnd3dy5naXRodWIuY29tMA4GA1UdDwEB/wQE
              AwIFoDAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwdQYDVR0fBG4wbDA0
              oDKgMIYuaHR0cDovL2NybDMuZGlnaWNlcnQuY29tL3NoYTItZXYtc2VydmVyLWcy
              LmNybDA0oDKgMIYuaHR0cDovL2NybDQuZGlnaWNlcnQuY29tL3NoYTItZXYtc2Vy
              dmVyLWcyLmNybDBLBgNVHSAERDBCMDcGCWCGSAGG/WwCATAqMCgGCCsGAQUFBwIB
              FhxodHRwczovL3d3dy5kaWdpY2VydC5jb20vQ1BTMAcGBWeBDAEBMIGIBggrBgEF
              BQcBAQR8MHowJAYIKwYBBQUHMAGGGGh0dHA6Ly9vY3NwLmRpZ2ljZXJ0LmNvbTBS
              BggrBgEFBQcwAoZGaHR0cDovL2NhY2VydHMuZGlnaWNlcnQuY29tL0RpZ2lDZXJ0
              U0hBMkV4dGVuZGVkVmFsaWRhdGlvblNlcnZlckNBLmNydDAMBgNVHRMBAf8EAjAA
              MIIBfgYKKwYBBAHWeQIEAgSCAW4EggFqAWgAdgCkuQmQtBhYFIe7E6LMZ3AKPDWY
              BPkb37jjd80OyA3cEAAAAWNBYm0KAAAEAwBHMEUCIQDRZp38cTWsWH2GdBpe/uPT
              Wnsu/m4BEC2+dIcvSykZYgIgCP5gGv6yzaazxBK2NwGdmmyuEFNSg2pARbMJlUFg
              U5UAdgBWFAaaL9fC7NP14b1Esj7HRna5vJkRXMDvlJhV1onQ3QAAAWNBYm0tAAAE
              AwBHMEUCIQCi7omUvYLm0b2LobtEeRAYnlIo7n6JxbYdrtYdmPUWJQIgVgw1AZ51
              vK9ENinBg22FPxb82TvNDO05T17hxXRC2IYAdgC72d+8H4pxtZOUI5eqkntHOFeV
              CqtS6BqQlmQ2jh7RhQAAAWNBYm3fAAAEAwBHMEUCIQChzdTKUU2N+XcqcK0OJYrN
              8EYynloVxho4yPk6Dq3EPgIgdNH5u8rC3UcslQV4B9o0a0w204omDREGKTVuEpxG
              eOQwDQYJKoZIhvcNAQELBQADggEBAHAPWpanWOW/ip2oJ5grAH8mqQfaunuCVE+v
              ac+88lkDK/LVdFgl2B6kIHZiYClzKtfczG93hWvKbST4NRNHP9LiaQqdNC17e5vN
              HnXVUGw+yxyjMLGqkgepOnZ2Rb14kcTOGp4i5AuJuuaMwXmCo7jUwPwfLe1NUlVB
              Kqg6LK0Hcq4K0sZnxE8HFxiZ92WpV2AVWjRMEc/2z2shNoDvxvFUYyY1Oe67xINk
              myQKc+ygSBZzyLnXSFVWmHr3u5dcaaQGGAR42v6Ydr4iL38Hd4dOiBma+FXsXBIq
              WUjbST4VXmdaol7uzFMojA4zkxQDZAvF5XgJlAFadfySna/teik=
              -----END CERTIFICATE-----
              """,
            """
              -----BEGIN CERTIFICATE-----
              MIIEtjCCA56gAwIBAgIQDHmpRLCMEZUgkmFf4msdgzANBgkqhkiG9w0BAQsFADBs
              MQswCQYDVQQGEwJVUzEVMBMGA1UEChMMRGlnaUNlcnQgSW5jMRkwFwYDVQQLExB3
              d3cuZGlnaWNlcnQuY29tMSswKQYDVQQDEyJEaWdpQ2VydCBIaWdoIEFzc3VyYW5j
              ZSBFViBSb290IENBMB4XDTEzMTAyMjEyMDAwMFoXDTI4MTAyMjEyMDAwMFowdTEL
              MAkGA1UEBhMCVVMxFTATBgNVBAoTDERpZ2lDZXJ0IEluYzEZMBcGA1UECxMQd3d3
              LmRpZ2ljZXJ0LmNvbTE0MDIGA1UEAxMrRGlnaUNlcnQgU0hBMiBFeHRlbmRlZCBW
              YWxpZGF0aW9uIFNlcnZlciBDQTCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoC
              ggEBANdTpARR+JmmFkhLZyeqk0nQOe0MsLAAh/FnKIaFjI5j2ryxQDji0/XspQUY
              uD0+xZkXMuwYjPrxDKZkIYXLBxA0sFKIKx9om9KxjxKws9LniB8f7zh3VFNfgHk/
              LhqqqB5LKw2rt2O5Nbd9FLxZS99RStKh4gzikIKHaq7q12TWmFXo/a8aUGxUvBHy
              /Urynbt/DvTVvo4WiRJV2MBxNO723C3sxIclho3YIeSwTQyJ3DkmF93215SF2AQh
              cJ1vb/9cuhnhRctWVyh+HA1BV6q3uCe7seT6Ku8hI3UarS2bhjWMnHe1c63YlC3k
              8wyd7sFOYn4XwHGeLN7x+RAoGTMCAwEAAaOCAUkwggFFMBIGA1UdEwEB/wQIMAYB
              Af8CAQAwDgYDVR0PAQH/BAQDAgGGMB0GA1UdJQQWMBQGCCsGAQUFBwMBBggrBgEF
              BQcDAjA0BggrBgEFBQcBAQQoMCYwJAYIKwYBBQUHMAGGGGh0dHA6Ly9vY3NwLmRp
              Z2ljZXJ0LmNvbTBLBgNVHR8ERDBCMECgPqA8hjpodHRwOi8vY3JsNC5kaWdpY2Vy
              dC5jb20vRGlnaUNlcnRIaWdoQXNzdXJhbmNlRVZSb290Q0EuY3JsMD0GA1UdIAQ2
              MDQwMgYEVR0gADAqMCgGCCsGAQUFBwIBFhxodHRwczovL3d3dy5kaWdpY2VydC5j
              b20vQ1BTMB0GA1UdDgQWBBQ901Cl1qCt7vNKYApl0yHU+PjWDzAfBgNVHSMEGDAW
              gBSxPsNpA/i/RwHUmCYaCALvY2QrwzANBgkqhkiG9w0BAQsFAAOCAQEAnbbQkIbh
              hgLtxaDwNBx0wY12zIYKqPBKikLWP8ipTa18CK3mtlC4ohpNiAexKSHc59rGPCHg
              4xFJcKx6HQGkyhE6V6t9VypAdP3THYUYUN9XR3WhfVUgLkc3UHKMf4Ib0mKPLQNa
              2sPIoc4sUqIAY+tzunHISScjl2SFnjgOrWNoPLpSgVh5oywM395t6zHyuqB8bPEs
              1OG9d4Q3A84ytciagRpKkk47RpqF/oOi+Z6Mo8wNXrM9zwR4jxQUezKcxwCmXMS1
              oVWNWlZopCJwqjyBcdmdqEU79OX2olHdx3ti6G8MdOu42vi/hw15UJGQmxg7kVkn
              8TUoE6smftX3eg==
              -----END CERTIFICATE-----
              """
          ],
          "alpn" => [],
        ],
        "hostnames" => [
          "ec2-52-64-108-95.ap-southeast-2.compute.amazonaws.com"
        ],
        "location" => [
          "city" => "Sydney",
          "region_code" => "02",
          "area_code" => null,
          "longitude" => 151.1982,
          "country_code3" => "AUS",
          "latitude" => -33.8612,
          "postal_code" => "1001",
          "dma_code" => null,
          "country_code" => "AU",
          "country_name" => "Australia"
        ],
        "timestamp" => "2019-08-19T03:56:24.521298",
        "domains" => [
          "amazonaws.com"
        ],
        "http" => [
          "robots_hash" => null,
          "redirects" => [],
          "securitytxt" => null,
          "title" => null,
          "sitemap_hash" => null,
          "robots" => null,
          "server" => null,
          "host" => "52.64.108.95",
          "html" => "",
          "location" => "/",
          "securitytxt_hash" => null,
          "sitemap" => null,
          "html_hash" => 0,
        ],
        "os" => null,
        "_shodan" => [
          "crawler" => "8cd926590a400feb4b683f8337a77287ddf3d2c7",
          "ptr" => true,
          "id" => "6fa0d818-89ed-434e-9783-2858f92fd4a2",
          "module" => "https",
          "options" => [],
        ],
        "opts" => [
          "vulns" => [],
          "heartbleed" => "2019/08/19 05:56:42 52.64.108.95:443 - SAFE",
        ],
        "ip_str" => "52.64.108.95",
      ],
      [
        "hash" => -869881938
        "tags" => [
          "cloud"
        ],
        "ip" => 876637279,
        "org" => "Amazon.com",
        "isp" => "Amazon.com",
        "transport" => "tcp",
        "data" => """
          HTTP/1.1 301 Moved Permanently
          Content-length: 0
          Location: https://52.64.108.95/
          
          """,
        "asn" => "AS16509",
        "port" => 80,
        "hostnames" => [
          "ec2-52-64-108-95.ap-southeast-2.compute.amazonaws.com"
        ],
        "location" => [
          "city" => "Sydney",
          "region_code" => "02",
          "area_code" => null,
          "longitude" => 151.1982,
          "country_code3" => "AUS",
          "latitude" => -33.8612,
          "postal_code" => "1001",
          "dma_code" => null,
          "country_code" => "AU",
          "country_name" => "Australia",
        ],
        "timestamp" => "2019-08-18T16:36:10.802300",
        "domains" => [
          "amazonaws.com"
        ],
        "http" => [
          "robots_hash" => null,
          "redirects" => [],
          "securitytxt" => null,
          "title" => null,
          "sitemap_hash" => null,
          "robots" => null,
          "server" => null,
          "host" => "52.64.108.95",
          "html" => "",
          "location" => "/",
          "securitytxt_hash" => null,
          "sitemap" => null,
          "html_hash" => 0,
        ],
        "os" => null,
        "_shodan" => [
          "crawler" => "4aca62e44af31a464bdc72210b84546d570e9365",
          "ptr" => true,
          "id" => "a5202028-955d-47ef-9171-6c11dc95b448",
          "module" => "http",
          "options" => []
        ],
        "opts" => [],
        "ip_str" => "52.64.108.95"
      ],
      [
        "info" => "protocol 2.0",
        "hash" => -1693182348,
        "tags" => [
          "cloud"
        ],
        "ip" => 876637279,
        "org" => "Amazon.com",
        "isp" => "Amazon.com",
        "transport" => "tcp",
        "data" => """
          SSH-2.0-babeld-fe2578dd
          Key type: ssh-rsa
          Key: AAAAB3NzaC1yc2EAAAABIwAAAQEAq2A7hRGmdnm9tUDbO9IDSwBK6TbQa+PXYPCPy6rbTrTtw7PH
          kccKrpp0yVhp5HdEIcKr6pLlVDBfOLX9QUsyCOV0wzfjIJNlGEYsdlLJizHhbn2mUjvSAHQqZETY
          P81eFzLQNnPHt4EVVUh7VfDESU84KezmD5QlWpXLmvU31/yMf+Se8xhHTvKSCZIFImWwoG6mbUoW
          f9nzpIoaSjB+weqqUUmpaaasXVal72J+UX2B+2RPW3RcT0eOzQgqlJL3RKrTJvdsjE3JEAvGq3lG
          HSZXy28G3skua2SmVi/w4yCE6gbODqnTWlg7+wC604ydGXA8VJiS5ap43JXiUFFAaQ==
          Fingerprint: 16:27:ac:a5:76:28:2d:36:63:1b:56:4d:eb:df:a6:48
          
          Kex Algorithms:
          \tcurve25519-sha256
          \tcurve25519-sha256@libssh.org
          \tecdh-sha2-nistp256
          \tecdh-sha2-nistp384
          \tecdh-sha2-nistp521
          \tdiffie-hellman-group-exchange-sha256
          
          Server Host Key Algorithms:
          \tssh-dss
          \trsa-sha2-512
          \trsa-sha2-256
          \tssh-rsa
          
          Encryption Algorithms:
          \tchacha20-poly1305@openssh.com
          \taes256-gcm@openssh.com
          \taes128-gcm@openssh.com
          \taes256-ctr
          \taes192-ctr
          \taes128-ctr
          \taes256-cbc
          \taes192-cbc
          \taes128-cbc
          
          MAC Algorithms:
          \thmac-sha2-256-etm@openssh.com
          \thmac-sha2-512-etm@openssh.com
          \thmac-sha1-etm@openssh.com
          \thmac-sha2-256
          \thmac-sha2-512
          \thmac-sha1
          
          Compression Algorithms:
          \tnone
          \tzlib
          \tzlib@openssh.com
          
          """,
        "asn" => "AS16509",
        "port" => 22,
        "hostnames" => [
          "ec2-52-64-108-95.ap-southeast-2.compute.amazonaws.com"
        ],
        "ssh" => [
          "type" => "ssh-rsa",
          "fingerprint" => "16:27:ac:a5:76:28:2d:36:63:1b:56:4d:eb:df:a6:48",
          "mac" => "hmac-sha2-256",
          "cipher" => "aes128-ctr",
          "key" => """
            AAAAB3NzaC1yc2EAAAABIwAAAQEAq2A7hRGmdnm9tUDbO9IDSwBK6TbQa+PXYPCPy6rbTrTtw7PH
            kccKrpp0yVhp5HdEIcKr6pLlVDBfOLX9QUsyCOV0wzfjIJNlGEYsdlLJizHhbn2mUjvSAHQqZETY
            P81eFzLQNnPHt4EVVUh7VfDESU84KezmD5QlWpXLmvU31/yMf+Se8xhHTvKSCZIFImWwoG6mbUoW
            f9nzpIoaSjB+weqqUUmpaaasXVal72J+UX2B+2RPW3RcT0eOzQgqlJL3RKrTJvdsjE3JEAvGq3lG
            HSZXy28G3skua2SmVi/w4yCE6gbODqnTWlg7+wC604ydGXA8VJiS5ap43JXiUFFAaQ==
            """,
          "kex" => [
            "unused" => 0,
            "server_host_key_algorithms" => [
              "ssh-dss",
              rsa-sha2-512",
              rsa-sha2-256",
              ssh-rsa",
            ],
            "encryption_algorithms" => [
              chacha20-poly1305@openssh.com",
              aes256-gcm@openssh.com",
              aes128-gcm@openssh.com",
              aes256-ctr",
              aes192-ctr",
              aes128-ctr",
              aes256-cbc",
              aes192-cbc",
              aes128-cbc"
            ],
            "kex_follows" => false,
            "languages" => [
              ""
            ],
            "kex_algorithms" => [
              curve25519-sha256",
              curve25519-sha256@libssh.org",
              ecdh-sha2-nistp256",
              ecdh-sha2-nistp384",
              ecdh-sha2-nistp521",
              diffie-hellman-group-exchange-sha256"
            ],
            "compression_algorithms" => [
              none",
              zlib",
              zlib@openssh.com",
            ],
            "mac_algorithms" => [
              hmac-sha2-256-etm@openssh.com",
              hmac-sha2-512-etm@openssh.com",
              hmac-sha1-etm@openssh.com",
              hmac-sha2-256",
              hmac-sha2-512",
              hmac-sha1",
            ],
          ],
          "hassh" => "3f0099d323fed5119bbfcca064478207",
        ],
        "timestamp" => "2019-08-05T21:14:32.967965",
        "domains" => [
          amazonaws.com",
        ],
        "ip_str" => "52.64.108.95",
        "os" => null,
        "_shodan" => [
          "crawler" => "5faf2928ceb560cb4276cc1b4660b2d763cc6397",
          "ptr" => true,
          "id" => null,
          "module" => "ssh",
          "options" => [],
        ],
        "opts" => [],
        "location" => [
          "city" => "Sydney",
          "region_code" => "02",
          "area_code" => null,
          "longitude" => 151.1982,
          "country_code3" => "AUS",
          "latitude" => -33.8612,
          "postal_code" => "1001",
          "dma_code" => null,
          "country_code" => "AU",
          "country_name" => "Australia",
        ],
      ],
    ],
    "asn" => "AS16509",
    "city" => "Sydney",
    "isp" => "Amazon.com",
    "longitude" => 151.1982,
    "last_update" => "2019-08-19T05:59:45.270104",
    "country_code3" => "AUS",
    "country_name" => "Australia",
    "ip_str" => "52.64.108.95",
    "os" => null,
    "ports" => [
      0 => 9418,
      1 => 443,
      2 => 80,
      3 => 22,
    ],
  ],
]
```
