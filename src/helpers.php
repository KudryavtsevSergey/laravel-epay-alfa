<?php
if (!function_exists('epayAlfa')) {
    function epayAlfa(?string $provider = null)
    {
        /** @var EpayAlfa $epayAlfa */
        $epayAlfa = app('EpayAlfa');
        return $epayAlfa->provider($provider);
    }
}
