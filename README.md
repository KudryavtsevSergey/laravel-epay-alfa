# Laravel epayAlfa package

## Installation

composer.json

```json
{
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/KudryavtsevSergey/laravel-epay-alfa.git"
        }
    ],
    "require": {
      "sun/epayAlfa": "dev-master"
    }
}
```

After updating composer, add the service provider to the ```providers``` array in ```config/app.php```

```php
[
    Sun\EpayAlfa\EpayAlfaServiceProvider::class,
];
```

And add alias:
```php
[
    'EpayAlfa' => Sun\EpayAlfa\Facade::class,
];
```
