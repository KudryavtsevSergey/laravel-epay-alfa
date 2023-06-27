<?php

declare(strict_types=1);

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
            $this->extractFieldFromConfig($providerData, 'username'),
            $this->extractFieldFromConfig($providerData, 'password'),
            rtrim($this->extractFieldFromConfig($providerData, 'gateway'), '/'),
            $this->extractFieldFromConfig($providerData, 'check_type'),
            $providerData['secret'] ?? null,
            $providerData['public_key'] ?? null
        );
    }

    private function extractFieldFromConfig(array $providerData, string $field): string
    {
        return $providerData[$field] ?? throw new FieldCannotBeNullException($field);
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
