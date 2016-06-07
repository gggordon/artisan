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
3. Run ```./vendor/gggordon/artisan/artisan artisan:init```. This command creates **artisan-config.php** and **artisan** in your root directory.


## Usage

* Run ```php artisan make:console command-name``` to create a new command. 
* When you create a new command, it will have **Artisan\Console\Commands** namespace. For example, if you run ```php artisan make:console Hello```, you will get ***Artisan\Console\Commands\Hello*** as a fully qualified class name. 
* Add the fully qualified class name to ***artisan-config.php***
* Run ```php artisan list``` to confirm.

For general usage, please refer to Artisan documentation at http://laravel.com/docs/5.2/artisan