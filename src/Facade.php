<?php

declare(strict_types=1);

namespace Sun\EpayAlfa;

use Illuminate\Support\Facades\Facade as IlluminateFacade;
use Sun\EpayAlfa\Service\AlfaApiService;

/**
 * @method static AlfaApiService apiService(string $provider)
 * @method static void loadKeysFrom(string|null $path)
 * @method static void ignoreRoutes()
 */
class Facade extends IlluminateFacade
{
    public const FACADE_ACCESSOR = 'EpayAlfa';

    protected static function getFacadeAccessor(): string
    {
        return self::FACADE_ACCESSOR;
    }
}
