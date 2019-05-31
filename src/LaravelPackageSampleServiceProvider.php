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
        // Load routes
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        // Load views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-package-sample');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        
        $this->publishes([
            // Publish views
            __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-package-sample'),

            // Publish config
            __DIR__.'/../config/laravel-package-sample.php' => config_path('laravel-package-sample.php'),
        ], 'laravel-package-sample');

        // Register middleware
        $this->app['router']->aliasMiddleware('just-test', \Leewanvu\LaravelPackageSample\Http\Middleware\JustTest::class);
    }

    /**
     * Make config publishment optional by merge the config from the package.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/laravel-package-sample.php', 'laravel-package-sample'
        );
    }
}