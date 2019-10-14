<?php

namespace Gtechmx\Fractal\Providers;

use Gtechmx\Fractal\Transformer;
use Illuminate\Support\ServiceProvider;

class FractalServiceProvider extends ServiceProvider
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
        $this->app->singleton('Gtechmx\Fractal\Transformer', function ($app) {
            return new Transformer;
        });
    }
}
