<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // No hace falta forzar carga de middleware aquí
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}