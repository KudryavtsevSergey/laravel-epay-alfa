<?php

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

use League\OAuth2\Server\CryptKey;
use Sun\EpayAlfa\Config\EpayAlfaConfig;
use Sun\EpayAlfa\Enum\NotificationTypeEnum;
use Sun\EpayAlfa\EpayAlfa;

class ChecksumVerifierFactory
{
    public function __construct(
        private EpayAlfaConfig $config,
    ) {
    }

    public function createByNotificationType(string $notificationType): ChecksumVerifier
    {
        switch ($notificationType) {
            case NotificationTypeEnum::NO_CHECKSUM:
                return new NoChecksumVerifier();
            case NotificationTypeEnum::SYMMETRIC_CHECKSUM:
                return new SymmetricChecksumVerifier($this->config->getSecret());
            case NotificationTypeEnum::ASYMMETRIC_CHECKSUM:
                return new AsymmetricChecksumVerifier($this->makePrivateCryptKey(), $this->makePublicCryptKey());
            default:
                throw NotificationTypeEnum::invalidValue($notificationType);
        }
    }

    private function makePrivateCryptKey(): ?CryptKey
    {
        return $this->makeCryptKey(EpayAlfa::privateKeyPath());
    }

    private function makePublicCryptKey(): ?CryptKey
    {
        return $this->makeCryptKey(EpayAlfa::publicKeyPath());
    }

    private function makeCryptKey(string $file): ?CryptKey
    {
        $key = sprintf('file://%s', $file);
        return is_file($key) ? new CryptKey($key, keyPermissionsCheck: false) : null;
    }
}
