<?php


namespace Omed\Laravel\Core;


use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes(
            [__DIR__.'/Resources/config/omed.php' => config_path('omed/core.php')],
            'config'
        );
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/Resources/config/omed.php',
            'omed.core'
        );
    }
}