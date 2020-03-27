<?php

namespace Tarsoft\Contax;

use Illuminate\Support\ServiceProvider;

class ContaxServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'contactform');
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');



    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}