<?php

namespace Sun\EpayAlfa;

use Illuminate\Support\Facades\Facade as IlluminateFacade;

class Facade extends IlluminateFacade
{
    public const FACADE_ACCESSOR = 'EpayAlfa';

    protected static function getFacadeAccessor()
    {
        return self::FACADE_ACCESSOR;
    }
}
