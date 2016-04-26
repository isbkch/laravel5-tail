# A tail command for Laravel 5

This package adds the tail command to Laravel 5.
This package works for daily and single logs and has support for tailing local and the remote logs.

## Install

You can install the package via composer:

``` bash
composer require isbkch/laravel5-tail
```
You must install this service provider:
```php
// config/app.php

'providers' => [
    ...
    'Isbkch\Tail\TailServiceProvider',
    ...
];
```

If you're planning on tailing remote logs you must publish the config file with this command:
``` bash
php artisan vendor:publish --provider="Isbkch\Tail\TailServiceProvider"
```
A file named ``tail.php`` will be created in the config directory. The options you can set in the file should be self-explanatory.
```php

return [


    'connections' => [

        /*
         * The environment name. You can use this value in the tail command.
         */
        'production' => [

             // Hostname of the server where the logs are located
            'host' => '',


             // Username to be used when connecting to the server where the logs are located
            'user' => '',

             // Full path to the directory where the logs are located
            'logDirectory' => '',
        ],

        // Change it to 'true' if you have grc (Generic Colouriser) installed in your system
        // To install grc on Debian based: sudo apt-get install grc
        'grc' => 'false'
    ],
];

```



## Usage


To tail the local log you can use this command:
``` bash
php artisan tail
```

By default the last 20 lines will be shown. You can change that number by using the ```lines```-option.
``` bash
php artisan tail --lines=50
```

To tail a remote log you must first specify ```hostname``` and ```logDirectory``` in the config-file. After you've done that you can tail the remote logs by specify the environment as an argument.
``` bash
php artisan tail production
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email isbkch@gmail.com instead of using the issue tracker.

## Credits

- [Freek Van der Herten](https://github.com/freekmurze)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
