<?php

namespace Sun\EpayAlfa\Config;

use Sun\EpayAlfa\Exceptions\Internal\FieldCannotBeNullException;
use Sun\EpayAlfa\Exceptions\Internal\ProviderNotFoundException;

class EpayAlfaConfig
{
    public function getAlfaProvider(?string $provider = null): AlfaProvider
    {
        $providerData = $this->getProviderData($provider);
        if (!is_array($providerData)) {
            throw new ProviderNotFoundException($provider);
        }

        return new AlfaProvider(
            $this->extractFieldFromConfig($providerData, $provider, 'username'),
            $this->extractFieldFromConfig($providerData, $provider, 'password'),
            $this->extractFieldFromConfig($providerData, $provider, 'gateway'),
            $this->extractFieldFromConfig($providerData, $provider, 'notification_type')
        );
    }

    private function extractFieldFromConfig(array $providerData, string $provider, string $field)
    {
        $value = $providerData[$field] ?? null;
        if (is_null($value)) {
            throw new FieldCannotBeNullException($provider, $field);
        }
        return $value;
    }

    private function getDefaultProvider(): string
    {
        return config('epayalfa.default_provider');
    }

    private function getProviders(): array
    {
        return config('epayalfa.providers', []);
    }

    public function getSecret(): ?string
    {
        return config('epayalfa.secret');
    }

    private function getProviderData(?string $provider = null): ?array
    {
        $provider = $provider ?? $this->getDefaultProvider();
        $providers = $this->getProviders();
        return $providers[$provider] ?? null;
    }
}
