<?php

namespace Sun\EpayAlfa\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Sun\EpayAlfa\Config\AlfaProvider;
use Sun\EpayAlfa\Config\EpayAlfaConfig;
use Sun\EpayAlfa\Exceptions\Request\WrongEpayAlfaChecksumException;
use Sun\EpayAlfa\Service\ChecksumVerifier\ChecksumVerifierFactory;

class ChecksumVerifier
{
    const CHECKSUM_FIELD = 'checksum';

    private EpayAlfaConfig $config;

    public function __construct(EpayAlfaConfig $config)
    {
        $this->config = $config;
    }

    /**
     * @param Request $request
     * @param Closure $next
     * @return mixed
     * @throws WrongEpayAlfaChecksumException
     */
    public function handle(Request $request, Closure $next)
    {
        $provider = $request->route('provider');
        $alfaProvider = $this->config->getAlfaProvider($provider);

        $checksum = $request->get(self::CHECKSUM_FIELD);
        $checksumVerifier = ChecksumVerifierFactory::createByNotificationType($alfaProvider->getNotificationType());
        if ($alfaProvider->getSecret() != $checksum) {
            throw new WrongEpayAlfaChecksumException($checksum);
        }

        return $next($request);
    }
}
