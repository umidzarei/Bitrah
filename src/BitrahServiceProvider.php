<?php

namespace Ako\Bitrah;

use Illuminate\Support\ServiceProvider;

class BitrahServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('bitrah', function ($app) {
            return new Bitrah();
        });
    }
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'bitrah');
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('bitrah.php'),
            ], 'config');
        }
    }
}
