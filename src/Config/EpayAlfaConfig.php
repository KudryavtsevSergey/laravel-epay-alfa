<?php

namespace Sun\EpayAlfa\Config;

use Illuminate\Support\Facades\Config;
use Sun\EpayAlfa\Enum\AlfaProviderEnum;
use Sun\EpayAlfa\Exceptions\Internal\FieldCannotBeNullException;
use Sun\EpayAlfa\Exceptions\Internal\ProviderNotFoundException;

class EpayAlfaConfig
{
    public function getAlfaProvider(string $provider): AlfaProvider
    {
        AlfaProviderEnum::checkAllowedValue($provider);
        $providerData = $this->getProviderData($provider);

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

    private function getProviders(): array
    {
        return Config::get('epayalfa.providers', []);
    }

    public function getSecret(): ?string
    {
        return Config::get('epayalfa.secret');
    }

    public function getChecksumImplementation(): string
    {
        return Config::get('epayalfa.checksum_implementation');
    }

    private function getProviderData(string $provider): array
    {
        $providers = $this->getProviders();
        $providerData = $providers[$provider] ?? null;
        if (!is_array($providerData)) {
            throw new ProviderNotFoundException($provider);
        }
        return $providerData;
    }
}
