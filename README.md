# Laravel Attribute Casters

[![Latest Version](https://badgen.net/packagist/v/kodekeep/laravel-attribute-casters)](https://packagist.org/packages/kodekeep/laravel-attribute-casters)
[![Software License](https://badgen.net/packagist/license/kodekeep/laravel-attribute-casters)](https://packagist.org/packages/kodekeep/laravel-attribute-casters)
[![Build Status](https://img.shields.io/github/workflow/status/kodekeep/laravel-attribute-casters/run-tests?label=tests)](https://github.com/kodekeep/laravel-attribute-casters/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Coverage Status](https://badgen.net/codeclimate/coverage/kodekeep/laravel-attribute-casters)](https://codeclimate.com/github/kodekeep/laravel-attribute-casters)
[![Quality Score](https://badgen.net/codeclimate/maintainability/kodekeep/laravel-attribute-casters)](https://codeclimate.com/github/kodekeep/laravel-attribute-casters)
[![Total Downloads](https://badgen.net/packagist/dt/kodekeep/laravel-attribute-casters)](https://packagist.org/packages/kodekeep/laravel-attribute-casters)

This package was created by, and is maintained by [Brian Faust](https://github.com/faustbrian), and provides custom attribute casters for Laravel Eloquent.

## Installation

```bash
composer require kodekeep/laravel-attribute-casters
```

## Usage

``` php
$skeleton = new KodeKeep\AttributeCasters();
echo $skeleton->echoPhrase('Hello, KodeKeep!');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@kodekeep.com. All security vulnerabilities will be promptly addressed.

## Credits

This project exists thanks to all the people who [contribute](../../contributors).

## Support Us

We invest a lot of resources into creating and maintaining our packages. You can support us and the development through [GitHub Sponsors](https://github.com/sponsors/faustbrian).

## License

Laravel Attribute Casters is an open-sourced software licensed under the [MPL-2.0](LICENSE.md).
