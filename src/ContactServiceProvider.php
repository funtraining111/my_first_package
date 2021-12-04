<?php

namespace Bitfumeskkk\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->loadViewsFrom(__DIR__.'/views', 'contact');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        // merge package config file to main project 
        $this->mergeConfigFrom(__DIR__.'/config/contact.php','contact');

        // publish package config file to main project
        // way to publish is use php artisan vendor:publish. then choose the file you want publish
        $this->publishes([__DIR__.'/config/contact.php' => config_path('main_contact.php')]);
    }
}
