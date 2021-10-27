<?php

namespace Sun\EpayAlfa\Enum;

class ApiEnum extends AbstractEnum
{
    public const REGISTER = 'register.do';
    public const GET_ORDER_STATUS = 'getOrderStatus.do';
    public const GET_ORDER_STATUS_EXTENDED = 'getOrderStatusExtended.do';
    public const REGISTER_PRE_AUTH = 'registerPreAuth.do';
    public const REFUND = 'refund.do';
    public const REVERSE = 'reverse.do';
    public const PAYMENT_ORDER_BINDING = 'paymentOrderBinding.do';
    public const DEPOSIT = 'deposit.do';
    public const GET_LAST_ORDERS_FOR_MERCHANTS = 'getLastOrdersForMerchants.do';

    public static function getValues(): array
    {
        return [
            self::REGISTER,
            self::GET_ORDER_STATUS,
            self::GET_ORDER_STATUS_EXTENDED,
            self::REGISTER_PRE_AUTH,
            self::REFUND,
            self::REVERSE,
            self::PAYMENT_ORDER_BINDING,
            self::DEPOSIT,
            self::GET_LAST_ORDERS_FOR_MERCHANTS,
        ];
    }
}
