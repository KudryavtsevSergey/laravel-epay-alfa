<?php

namespace Sun\EpayAlfa;

use Sun\EpayAlfa\Config\EpayAlfaConfig;
use Sun\EpayAlfa\Mapper\ArrayObjectMapper;
use Sun\EpayAlfa\Service\AlfaApiService;
use Sun\EpayAlfa\Service\AlfaHttpClientService;

class EpayAlfa
{
    public static ?string $keyPath = null;
    public static bool $registersRoutes = true;

    public function __construct(
        private EpayAlfaConfig $config,
    ) {
    }

    public function apiService(string $provider): AlfaApiService
    {
        $alfaProvider = $this->config->getAlfaProvider($provider);
        return new AlfaApiService(new AlfaHttpClientService(new ArrayObjectMapper(), $alfaProvider));
    }

    public static function loadKeysFrom($path): void
    {
        static::$keyPath = $path;
    }

    public static function ignoreRoutes(): void
    {
        static::$registersRoutes = false;
    }

    public static function publicKeyPath(): string
    {
        return self::keyPath('alfa-public.key');
    }

    public static function privateKeyPath(): string
    {
        return self::keyPath('alfa-private.key');
    }

    private static function keyPath($file): string
    {
        $file = ltrim($file, '/\\');

        return static::$keyPath
            ? sprintf('%s%s%s', rtrim(static::$keyPath, '/\\'), DIRECTORY_SEPARATOR, $file)
            : storage_path($file);
    }
}
