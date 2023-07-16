# Laravel Validation

[![Latest Version on Packagist](https://img.shields.io/packagist/v/yormy/validation-laravel.svg?style=flat-square)](https://packagist.org/packages/yormy/validation-laravel)
[![Total Downloads](https://img.shields.io/packagist/dt/yormy/validation-laravel.svg?style=flat-square)](https://packagist.org/packages/yormy/validation-laravel)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/facade/ignition/run-php-tests?label=Tests)
![Alt text](./coverage.svg)

Several cool basic laravel validation logic

## Installation


You can install the package via composer:

```bash
composer require yormy/validation-laravel
```

# Adding Xid Id's
Add to your database migrations
```
$table->string('xid')->unique();
```



## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Yormy](https://gitlab.com/yormy)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
