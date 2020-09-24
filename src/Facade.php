<?php

namespace Sun\EpayAlfa;

use Illuminate\Support\Facades\Facade as IlluminateFacade;

class Facade extends IlluminateFacade
{
    const FACADE = 'EpayAlfa';

    protected static function getFacadeAccessor()
    {
        return self::FACADE;
    }
}
