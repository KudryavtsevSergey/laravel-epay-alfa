<?php

namespace Sun\EpayAlfa;

use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Support\Facades\Route;
use Sun\EpayAlfa\Config\EpayAlfaConfig;
use Sun\EpayAlfa\Mapper\ArrayObjectMapper;
use Sun\EpayAlfa\Service\AlfaHttpClientService;
use Sun\EpayAlfa\Service\AlfaService;

class EpayAlfa
{
    public static ?string $keyPath = null;

    private EpayAlfaConfig $config;
    private ?string $provider = null;

    public function __construct(EpayAlfaConfig $config)
    {
        $this->config = $config;
    }

    public function getProvider(): ?string
    {
        return $this->provider;
    }

    public function setProvider(?string $provider): self
    {
        $this->provider = $provider;
        return $this;
    }

    public function provider(?string $provider = null): self
    {
        return $this->setProvider($provider);
    }

    public function createService(): AlfaService
    {
        $alfaProvider = $this->config->getAlfaProvider($this->provider);
        return new AlfaService(new AlfaHttpClientService(new ArrayObjectMapper(), $alfaProvider));
    }

    public static function loadKeysFrom($path): void
    {
        static::$keyPath = $path;
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

    public function routes(array $options = [])
    {
        $defaultOptions = ['prefix' => 'epayalfa', 'namespace' => '\Sun\EpayAlfa\Http\Controllers'];

        $options = array_merge($defaultOptions, $options);

        Route::group($options, function (Registrar $router): void {
            (new RouteRegistrar($router))->routes();
        });
    }
}
