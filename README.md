
## Laravel Activity Logger

[![Latest Stable Version](https://poser.pugx.org/chaseconey/laravel-activity/v/stable.svg)](https://packagist.org/packages/chaseconey/laravel-activity) [![Total Downloads](https://poser.pugx.org/chaseconey/laravel-activity/downloads.svg)](https://packagist.org/packages/chaseconey/laravel-activity) [![Latest Unstable Version](https://poser.pugx.org/chaseconey/laravel-activity/v/unstable.svg)](https://packagist.org/packages/chaseconey/laravel-activity) [![License](https://poser.pugx.org/chaseconey/laravel-activity/license.svg)](https://packagist.org/packages/chaseconey/laravel-activity)

A very simple activity logger build specifically for laravel that tracks actions performed by users based on
model events.

## Quikstart

1. Add package to composer.json
  ```
  "require": {
      "laravel/framework": "5.0.*",
      "chaseconey/laravel-activity": "dev-master"
    }
  ```

2. Add Service Provider to app.php config
  ```
  'Chaseconey\ActivityRecorder\ActivityProvider'
  ```
  
3. `composer update`
4. Publish the database migration for Activity table
  ```
  php artisan vendor:publish --provider="Chaseconey\ActivityRecorder\ActivityProvider" --tag="migrations"
  ```
5. `php artisan migrate`
6. Add the trait to any model and enjoy!
  ```
  Class Tweet extends Model
  {
    use RecordsActivity;
  }
  ```
