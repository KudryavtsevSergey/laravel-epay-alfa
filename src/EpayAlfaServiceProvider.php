<?php

declare(strict_types=1);

namespace Sun\EpayAlfa;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class EpayAlfaServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->registerRoutes();
        $this->registerPublishing();
    }

    protected function registerRoutes(): void
    {
        if (EpayAlfa::$registersRoutes) {
            Route::group([
                'prefix' => config('epayalfa.path', 'epayalfa'),
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

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/epayalfa.php', 'epayalfa');

        $this->app->singleton(Facade::FACADE_ACCESSOR, EpayAlfa::class);
    }
}
