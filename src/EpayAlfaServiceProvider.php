<?php

namespace Sun\EpayAlfa;

use Illuminate\Container\Container;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Sun\EpayAlfa\Config\EpayAlfaConfig;

class EpayAlfaServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->registerRoutes();
        $this->registerPublishing();
        $this->registerCommands();
    }

    protected function registerRoutes(): void
    {
        if (EpayAlfa::$registersRoutes) {
            Route::group([
                'prefix' => config('epayalfa.path', 'epayalfa'),
                'namespace' => '\Sun\EpayAlfa\Http\Controllers',
            ], function (): void {
                $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
            });
        }
    }

    protected function registerPublishing(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/epayalfa.php' => config_path('epayalfa.php')
            ], 'epayalfa-config');
        }
    }

    protected function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Console\KeysCommand::class,
            ]);
        }
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/epayalfa.php', 'epayalfa');

        $this->app->singleton(Facade::FACADE_ACCESSOR, EpayAlfa::class);

        $this->app->singleton(EpayAlfaConfig::class, static fn(
            Container $container,
        ): EpayAlfaConfig => new EpayAlfaConfig($container->make(Repository::class)));

    }
}
