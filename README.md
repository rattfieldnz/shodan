# Shodan

[![Build Status](https://travis-ci.org/rattfieldnz/shodan.svg?branch=master)](https://travis-ci.org/rattfieldnz/shodan)
[![styleci](https://styleci.io/repos/CHANGEME/shield)](https://styleci.io/repos/CHANGEME)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/rattfieldnz/shodan/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/rattfieldnz/shodan/?branch=master)
[![Coverage Status](https://coveralls.io/repos/github/rattfieldnz/shodan/badge.svg?branch=master)](https://coveralls.io/github/rattfieldnz/shodan?branch=master)

[![Packagist](https://img.shields.io/packagist/v/rattfieldnz/shodan.svg)](https://packagist.org/packages/rattfieldnz/shodan)
[![Packagist](https://poser.pugx.org/rattfieldnz/shodan/d/total.svg)](https://packagist.org/packages/rattfieldnz/shodan)
[![Packagist](https://img.shields.io/packagist/l/rattfieldnz/shodan.svg)](https://packagist.org/packages/rattfieldnz/shodan)

Package description: A laravel package to check URLs with Shodan API.

## Installation

Install via composer
```bash
composer require rattfieldnz/shodan
```

### Register Service Provider

**Note! This and next step are optional if you use laravel>=5.5 with package
auto discovery feature.**

Add service provider to `config/app.php` in `providers` section
```php
RattfieldNz\Shodan\ShodanServiceProvide::class,
```

### Register Facade

Register package facade in `config/app.php` in `aliases` section
```php
RattfieldNz\Shodan\Facades\ShodanFacade::class,
```

### Publish Configuration File

```bash
php artisan vendor:publish --provider="RattfieldNz\Shodan\ShodanServiceProvider" --tag="config"
```

## Usage

T.B.A, after further development.

## Security

If you discover any security related issues, please email emailme@robertattfield.com
instead of using the issue tracker.

## Credits

- [Robert Attfield](https://github.com/rattfieldnz/shodan)
- [All contributors](https://github.com/rattfieldnz/shodan/graphs/contributors)

This package is bootstrapped with the help of
[melihovv/laravel-package-generator](https://github.com/melihovv/laravel-package-generator).
