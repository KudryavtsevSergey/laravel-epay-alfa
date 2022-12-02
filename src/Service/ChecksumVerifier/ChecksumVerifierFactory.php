<?php

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

use Sun\EpayAlfa\Config\AlfaProvider;
use Sun\EpayAlfa\Enum\NotificationTypeEnum;

class ChecksumVerifierFactory
{
    public function create(AlfaProvider $alfaProvider): ChecksumVerifier
    {
        return match ($alfaProvider->getNotificationType()) {
            NotificationTypeEnum::NO_CHECKSUM => new NoChecksumVerifier(),
            NotificationTypeEnum::SYMMETRIC_CHECKSUM => new SymmetricChecksumVerifier($alfaProvider->getSecret()),
            NotificationTypeEnum::ASYMMETRIC_CHECKSUM => new AsymmetricChecksumVerifier(
                $alfaProvider->makePrivateCryptKey(),
                $alfaProvider->makePublicCryptKey()
            ),
            default => throw NotificationTypeEnum::invalidValue($alfaProvider->getNotificationType()),
        };
    }
}
