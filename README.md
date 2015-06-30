
## Laravel Activity Logger

[![StyleCI](https://styleci.io/repos/26730195/shield)](https://styleci.io/repos/34119315/)
[![Latest Stable Version](https://poser.pugx.org/chaseconey/laravel-activity/v/stable.svg)](https://packagist.org/packages/chaseconey/laravel-activity) [![Total Downloads](https://poser.pugx.org/chaseconey/laravel-activity/downloads.svg)](https://packagist.org/packages/chaseconey/laravel-activity) [![Latest Unstable Version](https://poser.pugx.org/chaseconey/laravel-activity/v/unstable.svg)](https://packagist.org/packages/chaseconey/laravel-activity) [![License](https://poser.pugx.org/chaseconey/laravel-activity/license.svg)](https://packagist.org/packages/chaseconey/laravel-activity)

A very simple activity logger build specifically for laravel that tracks actions performed by users based on
model events.

[Inspired by a Laracasts Lesson](https://github.com/laracasts/Build-An-Activity-Feed-in-Laravel/tree/master/app)

## Quikstart

1. Add package to composer.json

  ```php
  "require": {
      "laravel/framework": "5.0.*",
      "chaseconey/laravel-activity": "dev-master"
    }
  ```

2. Add Service Provider to app.php config
  ```php
  'Chaseconey\ActivityRecorder\ActivityProvider'
  ```
  
3. `composer update`
4. Publish the database migration for Activity table

  ```php
  php artisan vendor:publish --provider="Chaseconey\ActivityRecorder\ActivityProvider" --tag="migrations"
  ```
5. `php artisan migrate`
6. Add the trait to any model and enjoy!

  ```php
  
  use Chaseconey\ActivityRecorder\RecordsActivity;
  
  Class Tweet extends Model
  {
    use RecordsActivity;
  }
  
  ```
  
  
## Details

This package is supposed to be a sort of drop-in addition to your code base for tracking when a user is performing any
model events you want. The information is stored in a table, *activities*, and an *Activity* model is also provided for
accessing that information.

### Customizing Processed Events

By default, *created, updated, and deleted* events are persisted to the table. You can change which events are processed
by adding a static property to the model you have added the trait to:

```php
    
	Class Tweet extends Model
    {
        use RecordsActivity;
        
        /**
		 * Which events to record for the auth'd user.
		 *
		 * @var array
		 */
        protected static $recordEvents = ['created'];
    }
    
```
