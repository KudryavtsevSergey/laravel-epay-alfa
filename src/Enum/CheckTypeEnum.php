<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Enum;

class CheckTypeEnum extends AbstractEnum
{
    public const NO_CHECKSUM = 'NO_CHECKSUM';
    public const SYMMETRIC_CHECKSUM = 'SYMMETRIC_CHECKSUM';
    public const ASYMMETRIC_CHECKSUM = 'ASYMMETRIC_CHECKSUM';

    public static function getValues(): array
    {
        return [
            self::NO_CHECKSUM,
            self::SYMMETRIC_CHECKSUM,
            self::ASYMMETRIC_CHECKSUM,
        ];
    }
}
