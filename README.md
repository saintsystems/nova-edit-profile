# A tool to let user's update their profile in Laravel Nova

Based on [runlinenl/nova-profile-tool](https://github.com/runlinenl/nova-profile-tool) with a few fixes, changes and improvements.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/saintsystems/nova-edit-profile.svg?style=flat-square)](https://packagist.org/packages/saintsystems/nova-edit-profile)
[![Total Downloads](https://img.shields.io/packagist/dt/saintsystems/nova-edit-profile.svg?style=flat-square)](https://packagist.org/packages/saintsystems/nova-edit-profile)


When this tool is added to Nova, you can let users update their profile data without giving them access to the full
User resource under 'Resources'.

![screenshot of the backup tool](https://github.com/saintsystems/nova-edit-profile/raw/master/screenshot.png)

## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require saintsystems/nova-edit-profile
```

Next up, you must register the tool with Nova. This is typically done in the `tools` method of the `NovaServiceProvider`.

```php
// in app/Providers/NovaServiceProvider.php

// ...

public function tools()
{
    return [
        // ...
        new \SaintSystems\Nova\EditProfile,
    ];
}
```

## Usage

Click on the "Profile" menu item in your Nova app to see the tool provided by this package.

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email contact@saintsystems.com instead of using the issue tracker.

## Credits

- [Runline](https://github.com/runlinenl)
- [Adam Anderly](https://github.com/anderly)
- [Saint Systems](https://github.com/saintsystems)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
