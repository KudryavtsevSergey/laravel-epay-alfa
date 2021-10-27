<?php

namespace Sun\EpayAlfa\Enum;

class OperationEnum extends AbstractEnum
{
    public const APPROVED = 'approved';
    public const DEPOSITED = 'deposited';
    public const REVERSED = 'reversed';
    public const REFUNDED = 'refunded';
    public const DECLINED_BY_TIMEOUT = 'declinedByTimeout';

    public static function getValues(): array
    {
        return [
            self::APPROVED,
            self::DEPOSITED,
            self::REVERSED,
            self::REFUNDED,
            self::DECLINED_BY_TIMEOUT,
        ];
    }
}
