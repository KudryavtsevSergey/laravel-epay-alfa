<?php

namespace Sun\EpayAlfa\Config;

use League\OAuth2\Server\CryptKey;
use Sun\EpayAlfa\Enum\AlfaProviderEnum;
use Sun\EpayAlfa\EpayAlfa;

class AlfaProvider
{
    public function __construct(
        private string $provider,
        private string $username,
        private string $password,
        private string $gateway,
        private string $checkType,
        private ?string $secret,
        private ?string $publicKey,
        private ?string $privateKey,
    ) {
        AlfaProviderEnum::checkAllowedValue($provider);
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getGateway(): string
    {
        return $this->gateway;
    }

    public function getCheckType(): string
    {
        return $this->checkType;
    }

    public function getSecret(): ?string
    {
        return $this->secret;
    }

    public function makePrivateCryptKey(): ?CryptKey
    {
        return $this->makeCryptKey($this->privateKey, EpayAlfa::privateKeyPath($this->provider));
    }

    public function makePublicCryptKey(): ?CryptKey
    {
        return $this->makeCryptKey($this->publicKey, EpayAlfa::publicKeyPath($this->provider));
    }

    private function makeCryptKey(?string $key, string $file): ?CryptKey
    {
        $keyPath = $key !== null ? str_replace('\\n', "\n", $key) : null;
        if ($keyPath === null) {
            $filePath = sprintf('file://%s', $file);
            if (is_file($filePath)) {
                $keyPath = $filePath;
            }
        }

        return $keyPath !== null ? new CryptKey($keyPath, keyPermissionsCheck: false) : null;
    }
}
