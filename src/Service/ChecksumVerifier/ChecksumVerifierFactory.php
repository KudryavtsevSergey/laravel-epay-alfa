<?php

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

use Sun\EpayAlfa\Enum\NotificationTypeEnum;
use Sun\EpayAlfa\Exceptions\Internal\UnknownNotificationTypeException;

class ChecksumVerifierFactory
{
    public static function createByNotificationType(string $notificationType, ?string $secret): ChecksumVerifier
    {
        switch ($notificationType) {
            case NotificationTypeEnum::NO_CHECKSUM:
                return new NoChecksumVerifier();
            case NotificationTypeEnum::SYMMETRIC_CHECKSUM:
                // TODO:
                return new SymmetricChecksumVerifier('', $secret);
            case NotificationTypeEnum::ASYMMETRIC_CHECKSUM:
                // TODO:
                return new AsymmetricChecksumVerifier('', $secret);
            default:
                throw new UnknownNotificationTypeException($notificationType);
        }
    }
}
