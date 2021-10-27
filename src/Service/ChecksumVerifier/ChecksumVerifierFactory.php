<?php

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

use League\OAuth2\Server\CryptKey;
use Sun\EpayAlfa\Config\EpayAlfaConfig;
use Sun\EpayAlfa\Enum\NotificationTypeEnum;
use Sun\EpayAlfa\EpayAlfa;
use Sun\EpayAlfa\Exceptions\InvalidValueException;

class ChecksumVerifierFactory
{
    private EpayAlfaConfig $config;

    public function __construct(EpayAlfaConfig $config)
    {
        $this->config = $config;
    }

    public function createByNotificationType(
        string $notificationType,
        ChecksumInterface $checksum
    ): ChecksumVerifier {
        switch ($notificationType) {
            case NotificationTypeEnum::NO_CHECKSUM:
                return new NoChecksumVerifier();
            case NotificationTypeEnum::SYMMETRIC_CHECKSUM:
                return new SymmetricChecksumVerifier($checksum, $this->config->getSecret());
            case NotificationTypeEnum::ASYMMETRIC_CHECKSUM:
                return new AsymmetricChecksumVerifier($checksum, $this->makePrivateCryptKey(), $this->makePublicCryptKey());
            default:
                throw new InvalidValueException($notificationType, NotificationTypeEnum::getValues());
        }
    }

    private function makePrivateCryptKey(): CryptKey
    {
        return $this->makeCryptKey(EpayAlfa::privateKeyPath());
    }

    private function makePublicCryptKey(): CryptKey
    {
        return $this->makeCryptKey(EpayAlfa::publicKeyPath());
    }

    private function makeCryptKey(string $file): CryptKey
    {
        $key = sprintf('file://%s', $file);
        return new CryptKey($key, null, false);
    }
}
