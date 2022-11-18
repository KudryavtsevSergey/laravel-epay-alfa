<?php

namespace Sun\EpayAlfa;

use Illuminate\Support\Facades\Facade as IlluminateFacade;
use Sun\EpayAlfa\Service\AlfaApiService;

/**
 * @method static AlfaApiService apiService(string $provider)
 */
class Facade extends IlluminateFacade
{
    public const FACADE_ACCESSOR = 'EpayAlfa';

    protected static function getFacadeAccessor()
    {
        return self::FACADE_ACCESSOR;
    }
}
