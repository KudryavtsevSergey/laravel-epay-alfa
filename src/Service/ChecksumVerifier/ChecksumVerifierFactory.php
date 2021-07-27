<?php

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

use Sun\EpayAlfa\Enum\NotificationTypeEnum;
use Sun\EpayAlfa\Exceptions\Internal\UnknownNotificationTypeException;

class ChecksumVerifierFactory
{
    public static function createByNotificationType(string $notificationType): ChecksumVerifier
    {
        switch ($notificationType) {
            case NotificationTypeEnum::NO_CHECKSUM:
                return new NoChecksumVerifier();
            case NotificationTypeEnum::SYMMETRIC_CHECKSUM:
                return new SymmetricChecksumVerifier();
            case NotificationTypeEnum::ASYMMETRIC_CHECKSUM:
                return new AsymmetricChecksumVerifier();
            default:
                throw new UnknownNotificationTypeException($notificationType);
        }
    }
}
