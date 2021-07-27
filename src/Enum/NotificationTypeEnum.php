<?php

namespace Sun\EpayAlfa\Enum;

class NotificationTypeEnum extends AbstractEnum
{
    const NO_CHECKSUM = 'NO_CHECKSUM';
    const SYMMETRIC_CHECKSUM = 'SYMMETRIC_CHECKSUM';
    const ASYMMETRIC_CHECKSUM = 'ASYMMETRIC_CHECKSUM';

    public static function getValues(): array
    {
        return [
            self::NO_CHECKSUM,
            self::SYMMETRIC_CHECKSUM,
            self::ASYMMETRIC_CHECKSUM,
        ];
    }
}
