<?php

namespace Gtechmx\Fractal\Providers;

use Gtechmx\Fractal\ArraySerializer;
use Gtechmx\Fractal\Transformer;
use Illuminate\Support\ServiceProvider;

class FractalServiceProvider extends ServiceProvider
{
    protected $commands = [
        'Gtechmx\Fractal\Commands\FractalCommand'
    ];
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('Gtechmx\Fractal\Transformer', function ($app) {
            return new Transformer(new ArraySerializer);
        });
    }
}
