<?php

namespace Devos\ApiConsumer\Provider;

use Illuminate\Support\ServiceProvider as BaseProvider;
use Devos\ApiConsumer\Router;

class LaravelServiceProvider extends BaseProvider {

    public function register()
    {

    }

    public function boot()
    {
        $this->app->singleton('apiconsumer', function(){
            $app = app();

            return new Router($app, $app['request'], $app['router']);
        });
    }

}