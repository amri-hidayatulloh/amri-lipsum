<?php

namespace Amri\LipsumGenerator;

use Illuminate\Support\ServiceProvider;

class LipsumGeneratorServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/lipsum.php' => config_path('lipsum.php')
        ]);
    }

    public function register()
    {
        $this->app->singleton(Lipsum::class, function() {
            return new Lipsum();
        });
    }
}
