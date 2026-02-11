# IMV Gateway

[![Latest Version on Packagist](https://img.shields.io/packagist/v/imv/gateway.svg?style=flat-square)](https://packagist.org/packages/imv/gateway)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/imv/gateway/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/imv/gateway/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/imv/gateway.svg?style=flat-square)](https://packagist.org/packages/imv/gateway)

Laravel package for IMV Gateway API integration.

## Installation

```bash
composer require imv/gateway
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="gateway-config"
```

## Usage

```php
$gateway = new Imv\Gateway\Gateway();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
