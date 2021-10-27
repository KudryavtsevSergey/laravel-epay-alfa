<?php

namespace Sun\EpayAlfa\Enum;

class OrderStatusEnum extends AbstractEnum
{
    public const ORDER_REGISTERED_BUT_NOT_PAID = 0;
    public const PRE_AUTHORIZED_AMOUNT_IS_FROZEN = 1;
    public const COMPLETED_FULL_AUTHORIZATION_OF_THE_ORDER_AMOUNT = 2;
    public const AUTHORIZATION_CANCELED = 3;
    public const A_REFUND_OPERATION_WAS_PERFORMED_ON_THE_TRANSACTION = 4;
    public const AUTHORIZATION_INITIATED_THROUGH_THE_ISSUING_BANK_ACS = 5;
    public const AUTHORIZATION_REJECTED = 6;

    public static function getValues(): array
    {
        return [
            self::ORDER_REGISTERED_BUT_NOT_PAID,
            self::PRE_AUTHORIZED_AMOUNT_IS_FROZEN,
            self::COMPLETED_FULL_AUTHORIZATION_OF_THE_ORDER_AMOUNT,
            self::AUTHORIZATION_CANCELED,
            self::A_REFUND_OPERATION_WAS_PERFORMED_ON_THE_TRANSACTION,
            self::AUTHORIZATION_INITIATED_THROUGH_THE_ISSUING_BANK_ACS,
            self::AUTHORIZATION_REJECTED,
        ];
    }
}
