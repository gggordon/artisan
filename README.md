## Laravel Artisan as a Package

Laravel Artisan is not available as a composer package. You can use Laravel Artisan in your project with this package.

## Installation
1. Add the following repository to your composer.json
```
    "repositories": [
        {
            "url": "https://github.com/gggordon/artisan.git",
            "type": "git"
        }
    ]
```
2. Run ```composer require gggordon/artisan```
3. Run ```./vendor/gggordon/artisan/artisan artisan:init```. This command creates **./config/artisan.php** and **artisan** in your root directory.


## Usage

* Run ```php artisan make:console command-name``` to create a new command. 
* When you create a new command, it will have **Artisan\Console\Commands** namespace. For example, if you run ```php artisan make:console Hello```, you will get ***Artisan\Console\Commands\Hello*** as a fully qualified class name. 
* Add the fully qualified class name to ***artisan-config.php***
* Run ```php artisan list``` to confirm.

For general usage, please refer to Artisan documentation at http://laravel.com/docs/5.2/artisan

### Sample Artisan Config
```
<?php

return [
    'commands' => [
        // commands path
        Illuminate\Queue\Console\TableCommand::class,
        Illuminate\Auth\Console\MakeAuthCommand::class,
        Illuminate\Foundation\Console\UpCommand::class,
        Illuminate\Foundation\Console\DownCommand::class,
        Illuminate\Auth\Console\ClearResetsCommand::class,
        Illuminate\Foundation\Console\ServeCommand::class,
        Illuminate\Cache\Console\CacheTableCommand::class,
        Illuminate\Queue\Console\FailedTableCommand::class,
        Illuminate\Foundation\Console\TinkerCommand::class,
        Illuminate\Foundation\Console\JobMakeCommand::class,
        Illuminate\Foundation\Console\AppNameCommand::class,
        Illuminate\Foundation\Console\OptimizeCommand::class,
        Illuminate\Foundation\Console\TestMakeCommand::class,
        Illuminate\Foundation\Console\EventMakeCommand::class,
        Illuminate\Foundation\Console\ModelMakeCommand::class,
        Illuminate\Foundation\Console\ViewClearCommand::class,
        Illuminate\Session\Console\SessionTableCommand::class,
        Illuminate\Foundation\Console\PolicyMakeCommand::class,
        Illuminate\Foundation\Console\RouteCacheCommand::class,
        Illuminate\Foundation\Console\RouteClearCommand::class,
        Illuminate\Routing\Console\ControllerMakeCommand::class,
        Illuminate\Routing\Console\MiddlewareMakeCommand::class,
        Illuminate\Foundation\Console\ConfigCacheCommand::class,
        Illuminate\Foundation\Console\ConfigClearCommand::class,
        Illuminate\Foundation\Console\ConsoleMakeCommand::class,
        Illuminate\Foundation\Console\EnvironmentCommand::class,
        Illuminate\Foundation\Console\KeyGenerateCommand::class,
        Illuminate\Foundation\Console\RequestMakeCommand::class,
        Illuminate\Foundation\Console\ListenerMakeCommand::class,
        Illuminate\Foundation\Console\ProviderMakeCommand::class,
        Illuminate\Foundation\Console\ClearCompiledCommand::class,
        Illuminate\Foundation\Console\EventGenerateCommand::class,
        Illuminate\Foundation\Console\VendorPublishCommand::class,
        Illuminate\Database\Console\Seeds\SeederMakeCommand::class,    
    ],
];
```

## License
MIT