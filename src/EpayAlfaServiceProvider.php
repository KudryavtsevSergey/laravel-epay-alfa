<?php

namespace Sun\EpayAlfa;

use Illuminate\Support\ServiceProvider;

class EpayAlfaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/epayalfa.php' => config_path('epayalfa.php')
        ], 'epayalfa-config');

        if ($this->app->runningInConsole()) {
            $this->commands([
                Console\KeysCommand::class,
            ]);
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/epayalfa.php', 'epayalfa');

        $this->app->singleton(Facade::FACADE_ACCESSOR, EpayAlfa::class);
    }
}
