<?php

namespace Sun\EpayAlfa\Enum;

class OperationEnum extends AbstractEnum
{
    const APPROVED = 'approved';
    const DEPOSITED = 'deposited';
    const REVERSED = 'reversed';
    const REFUNDED = 'refunded';
    const DECLINED_BY_TIMEOUT = 'declinedByTimeout';

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
