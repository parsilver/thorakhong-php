# THORAKHONG (โทรโข่ง) PHP Package

#### NOTE: This package is still under development.



[![Latest Version on Packagist](https://img.shields.io/packagist/v/farzai/thorakhong.svg?style=flat-square)](https://packagist.org/packages/farzai/thorakhong)
[![Tests](https://img.shields.io/github/actions/workflow/status/farzai/thorakhong/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/farzai/thorakhong/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/farzai/thorakhong.svg?style=flat-square)](https://packagist.org/packages/farzai/thorakhong)

THORAKHONG (โทรโข่ง) is a PHP package for sending messages to multiple chat platforms such as Line, Telegram, and Facebook Messenger.

## Installation

You can install the package via composer:

```bash
composer require farzai/thorakhong
```

## Usage

```php
use Farzai\Thorakhong\Client;
use Farzai\Thorakhong\Message;
use Farzai\Thorakhong\Channels\LineChannel;
use Farzai\Thorakhong\Channels\TelegramChannel;
use Farzai\Thorakhong\Channels\FacebookMessengerChannel;

$client = new Farzai\Thorakhong\Client([
    'line' => [
        'channel_access_token' => 'YOUR_LINE_CHANNEL_ACCESS_TOKEN',
    ],
    'telegram' => [
        'bot_token' => 'YOUR_TELEGRAM_BOT_TOKEN',
    ],
    'facebook_messenger' => [
        'page_access_token' => 'YOUR_FACEBOOK_PAGE_ACCESS_TOKEN',
    ],
]);

// Setup message
$message = Message::make()
    ->content('Hello World')
    ->withPhoto('https://example.com/photo.jpg')
    ->create();

$channel = new LineChannel($client);

$chat = 

```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [parsilver](https://github.com/parsilver)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
