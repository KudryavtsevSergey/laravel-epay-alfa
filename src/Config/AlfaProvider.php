<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Config;

use League\OAuth2\Server\CryptKey;
use Sun\EpayAlfa\Enum\AlfaProviderEnum;
use Sun\EpayAlfa\EpayAlfa;

class AlfaProvider
{
    public function __construct(
        private readonly string $provider,
        private readonly string $username,
        private readonly string $password,
        private readonly string $gateway,
        private readonly string $checkType,
        private readonly ?string $secret,
        private readonly ?string $publicKey,
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

    public function makeCryptKey(): ?CryptKey
    {
        $keyPath = $this->publicKey !== null ? str_replace('\\n', "\n", $this->publicKey) : null;
        if ($keyPath === null) {
            $filePath = sprintf('file://%s', EpayAlfa::publicKeyPath($this->provider));
            if (is_file($filePath)) {
                $keyPath = $filePath;
            }
        }

        return $keyPath !== null ? new CryptKey($keyPath, keyPermissionsCheck: false) : null;
    }
}
