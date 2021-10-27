<?php

namespace Sun\EpayAlfa\Enum;

class TransactionStateEnum extends AbstractEnum
{
    public const CREATED = 'CREATED';
    public const APPROVED = 'APPROVED';
    public const DEPOSITED = 'DEPOSITED';
    public const DECLINED = 'DECLINED';
    public const REVERSED = 'REVERSED';
    public const REFUNDED = 'REFUNDED';

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
