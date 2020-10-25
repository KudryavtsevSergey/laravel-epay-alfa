<?php

namespace Sun\EpayAlfa\Enum;

class TransactionStateEnum extends AbstractEnum
{
    const CREATED = 'CREATED';
    const APPROVED = 'APPROVED';
    const DEPOSITED = 'DEPOSITED';
    const DECLINED = 'DECLINED';
    const REVERSED = 'REVERSED';
    const REFUNDED = 'REFUNDED';

    public static function getValues(): array
    {
        return [
            self::CREATED,
            self::APPROVED,
            self::DEPOSITED,
            self::DECLINED,
            self::REVERSED,
            self::REFUNDED,
        ];
    }
}
