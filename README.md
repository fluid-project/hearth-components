# This is my package hearth-components

[![Latest Version on Packagist](https://img.shields.io/packagist/v/fluid-project/hearth-components.svg?style=flat-square)](https://packagist.org/packages/fluid-project/hearth-components)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/fluid-project/hearth-components/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/fluid-project/hearth-components/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/fluid-project/hearth-components/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/fluid-project/hearth-components/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Code Coverage](https://codecov.io/gh/fluid-project/hearth-components/graph/badge.svg?token=1J9DQ6F2QT)](https://codecov.io/gh/fluid-project/hearth-components)
[![Total Downloads](https://img.shields.io/packagist/dt/fluid-project/hearth-components.svg?style=flat-square)](https://packagist.org/packages/fluid-project/hearth-components)

Robust components for the Laravel Framework.

## Installation

You can install the package via composer:

```bash
composer require fluid-project/hearth-components
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="hearth-components-views"
```

## Usage

TODO.

## Testing

To run automated tests:

```bash
composer test
```

To test integration in a Laravel application:

1. Create a new Laravel project for testing.

   ```
   laravel new hearth-test
   ```

2. Answer the interactive questions in the installer as follows.

   1. Which starter kit would you like to use? _None_
   2. Which testing framework do you prefer? _Pest_
   3. Do you want to install Laravel Boost to improve AI assisted coding? _No_
   4. Which database will your application use? _SQLite_
   5. Would you like to run `npm install --ignore-scripts` and `npm run build`? _Yes_

3. Add Hearth to your new Laravel project.

   ```
   cd hearth-test
   composer require fluid-project/hearth-components:dev-laravel-13-support
   ```

4. Create a new [view route](https://laravel.com/docs/13.x/routing#view-routes) and add components to the view as per the [instructions](https://github.com/fluid-project/hearth-components/wiki).

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](.github/SECURITY.md) on how to report security vulnerabilities.

## Credits

- [OCAD University](https://github.com/fluid-project)

## License

The BSD 3-Clause License. Please see [License File](LICENSE.md) for more information.
