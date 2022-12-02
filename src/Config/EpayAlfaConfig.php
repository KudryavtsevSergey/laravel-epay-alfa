<?php

namespace Sun\EpayAlfa\Config;

use Illuminate\Contracts\Config\Repository;
use Sun\EpayAlfa\Enum\AlfaProviderEnum;
use Sun\EpayAlfa\Exceptions\Internal\FieldCannotBeNullException;
use Sun\EpayAlfa\Exceptions\Internal\ProviderNotFoundException;

class EpayAlfaConfig
{
    public function __construct(
        private Repository $config,
    ) {
    }

    public function getAlfaProvider(string $provider): AlfaProvider
    {
        AlfaProviderEnum::checkAllowedValue($provider);
        $providerData = $this->getProviderData($provider);

        return new AlfaProvider(
            $provider,
            $this->extractFieldFromConfig($providerData, $provider, 'username'),
            $this->extractFieldFromConfig($providerData, $provider, 'password'),
            rtrim($this->extractFieldFromConfig($providerData, $provider, 'gateway'), '/'),
            $this->extractFieldFromConfig($providerData, $provider, 'notification_type'),
            $this->extractFieldFromConfig($providerData, $provider, 'secret', true),
            $this->extractFieldFromConfig($providerData, $provider, 'public_key', true),
            $this->extractFieldFromConfig($providerData, $provider, 'private_key', true)
        );
    }

    private function extractFieldFromConfig(
        array $providerData,
        string $provider,
        string $field,
        bool $allowNull = false
    ): ?string {
        $value = $providerData[$field] ?? null;
        if (!$allowNull && $value === null) {
            throw new FieldCannotBeNullException($provider, $field);
        }
        return $value;
    }

    private function getProviders(): array
    {
        return $this->config->get('epayalfa.providers', []);
    }

    public function getChecksumImplementation(): string
    {
        return $this->config->get('epayalfa.checksum_implementation');
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
