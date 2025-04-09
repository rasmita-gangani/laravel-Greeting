<?php

namespace MyVendor\Greeting;

use Illuminate\Support\ServiceProvider;

class GreetingServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('greeting', function () {
            return new Greeting();
        });

        $this->loadHelpers();
    }

    public function boot()
    {
        //
    }

    protected function loadHelpers()
    {
        require_once __DIR__ . '/Helpers/greeting.php';
    }
}
