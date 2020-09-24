<?php

namespace Sun\EpayAlfa\Config;

class EpayAlfaConfig
{
    public function getAlfaProvider(?string $provider = null): AlfaProvider
    {
        $provider = $provider ?? $this->getDefaultProvider();
        $providers = $this->getProviders();
        $providerData = $providers[$provider] ?? [];

        return $this->createAlfaProvider($providerData);
    }

    private function getDefaultProvider(): string
    {
        return config('epayalfa.default_provider');
    }

    private function getProviders(): array
    {
        return config('epayalfa.providers');
    }

    private function createAlfaProvider(array $provider): AlfaProvider
    {
        $username = $provider['username'] ?? null;
        $password = $provider['password'] ?? null;
        $getawayUrl = $provider['getaway_url'] ?? null;

        return new AlfaProvider($username, $password, $getawayUrl);
    }
}
