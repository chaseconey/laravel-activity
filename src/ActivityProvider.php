<?php

namespace Chaseconey\ActivityRecorder;

use Illuminate\Support\ServiceProvider;

class ActivityProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__ . '/../database/migrations/' => database_path('/migrations')
        ], 'migrations');
    }
}
