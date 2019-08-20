# Shodan

[![PHP Version](https://img.shields.io/badge/php-7.3%2B-green.svg)](https://packagist.org/packages/rattfieldnz/shodan) [![PHP Version](https://img.shields.io/badge/php-7.2%2B-green.svg)](https://packagist.org/packages/rattfieldnz/shodan) 
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci] 
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/rattfieldnz/shodan/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/rattfieldnz/shodan/?branch=master) 
[![codecov](https://codecov.io/gh/rattfieldnz/shodan/branch/master/graph/badge.svg)](https://codecov.io/gh/rattfieldnz/shodan)

A laravel package to check URLs with Shodan API.

* [Installation](#installation)
  * [Register Service Provider](#register_service_provider)
  * [Register Facade](#register_facade)
  * [Publish Configuration File](#publish_config_file)
  * [Set your Shodan API key](#set_shodan_api_key)
* [Usage](#usage)
  * [Using Blade Syntax](#using_blade_syntax)
  * [Using Facades](#using_facades)
* [Example with input and output (associative array)](#example_input_output_associative_array)
* [Example with input and output (JSON)](#example_input_output_json)
* [Security](#security)
* [Credits](#credits)

## <a id="installation"></a>Installation

Install via composer
```bash
composer require rattfieldnz/shodan
```

### <a id="register_service_provider"></a>Register Service Provider

**Note! This and next step are optional if you use laravel>=5.5 with package
auto discovery feature.**

Add service provider to `config/app.php` in `providers` section.
```php
RattfieldNz\Shodan\ShodanServiceProvider::class,
```

### <a id="register_facade"></a>Register Facade

Register package facade in `config/app.php` in `aliases` section
```php
RattfieldNz\Shodan\Facades\ShodanFacade::class,
```

### <a id="publish_config_file"></a>Publish Configuration File

```bash
php artisan vendor:publish --provider="RattfieldNz\Shodan\ShodanServiceProvider" --tag="shodan"
```

### <a id="set_shodan_api_key"></a>Set your Shodan API key

In your `.env`, add:

```bash
SHODAN_API_KEY=YOUR-ACTUAL-API-KEY
SHODAN_REQUEST_TIMEOUT=10
```

## <a id="usage"></a>Usage

### <a id="using_blade_syntax"></a>Using Blade Syntax

```php
@if(isset(Shodan::setUrl('https://github.com')->check()->getResults()))
    // Iterate over associative array results.
    // getResults(true) returns results as JSON-encoded string.
@else
    <p>No results were found</p>
@endif
```

`getResults(true)` returns results as JSON-encoded string.

### <a id="using_facades"></a>Using Facades

```php
Shodan::setUrl('https://github.com');
Shodan::check();
Shodan::getResults();
```

Or:

```php
Shodan::setUrl('https://github.com')->check()->getResults();
```
## <a id="example_input_output_associative_array"></a>Example with input and output (associative array)

View [EXAMPLE_INPUT_OUTPUT_ASSOCIATIVEARRAY.md](https://github.com/rattfieldnz/shodan/blob/master/EXAMPLE_INPUT_OUTPUT_ASSOCIATIVEARRAY.md).

## <a id="example_input_output_json"></a>Example with input and output (JSON)

View [EXAMPLE_INPUT_OUTPUT_JSON.md](https://github.com/rattfieldnz/shodan/blob/master/EXAMPLE_INPUT_OUTPUT_JSON.md).

## <a id="security"></a>Security

If you discover any security related issues, please email emailme@robertattfield.com
instead of using the issue tracker.

## <a id="credits"></a>Credits

- [Robert Attfield](https://github.com/rattfieldnz/shodan)
- [All contributors](https://github.com/rattfieldnz/shodan/graphs/contributors)

This package is bootstrapped with the help of
[melihovv/laravel-package-generator](https://github.com/melihovv/laravel-package-generator).


[ico-version]: https://img.shields.io/packagist/v/rattfieldnz/shodan.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/rattfieldnz/shodan.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/rattfieldnz/shodan/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/202842370/shield

[link-packagist]: https://packagist.org/packages/rattfieldnz/shodan
[link-downloads]: https://packagist.org/packages/rattfieldnz/shodan
[link-travis]: https://travis-ci.org/rattfieldnz/shodan
[link-styleci]: https://styleci.io/repos/202842370
[link-author]: https://github.com/rattfieldnz
