<?php

namespace Sun\EpayAlfa\Config;

class EpayAlfaConfig
{
    public function getAlfaProvider(?string $provider = null): AlfaProvider
    {
        $provider = $provider ?? $this->getDefaultProvider();
        $providers = $this->getProviders();
        $providerData = $providers[$provider] ?? [];

        return new AlfaProvider(
            $providerData['username'] ?? null,
            $providerData['password'] ?? null,
            $providerData['gateway'] ?? null
        );
    }

    private function getDefaultProvider(): string
    {
        return config('epayalfa.default_provider');
    }

    private function getProviders(): array
    {
        return config('epayalfa.providers', []);
    }

    public function getProviderKeys(): array
    {
        return array_keys($this->getProviders());
    }
}
