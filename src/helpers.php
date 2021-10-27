<?php

use Sun\EpayAlfa\EpayAlfa;
use Sun\EpayAlfa\Facade;

if (!function_exists('epayAlfa')) {
    function epayAlfa(?string $provider = null): EpayAlfa
    {
        /** @var EpayAlfa $epayAlfa */
        $epayAlfa = app(Facade::FACADE_ACCESSOR);
        return $epayAlfa->provider($provider);
    }
}
