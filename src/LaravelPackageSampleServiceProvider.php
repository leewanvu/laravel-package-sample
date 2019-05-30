<?php

namespace Leewanvu\LaravelPackageSample;

use Illuminate\Support\ServiceProvider;

class LaravelPackageSampleServiceProvider extends ServiceProvider
{
    /**
     * Publishes configuration file.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-package-sample');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-package-sample'),
        ], 'laravel-package-sample');

        $this->app['router']->aliasMiddleware('just-test', \Leewanvu\LaravelPackageSample\Http\Middleware\JustTest::class);
    }

    /**
     * Make config publishment optional by merge the config from the package.
     *
     * @return void
     */
    public function register()
    {
        
    }
}