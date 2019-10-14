<?php

namespace Gtechmx\Fractal\Facades;

use Illuminate\Support\Facades\Facade;

class Fractal extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Gtechmx\Fractal\Transformer';
    }
}