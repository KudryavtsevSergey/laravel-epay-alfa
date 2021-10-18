<?php

namespace Sun\EpayAlfa\Enum;

class ApiEnum extends AbstractEnum
{
    const REGISTER = 'register.do';
    const GET_ORDER_STATUS = 'getOrderStatus.do';
    const GET_ORDER_STATUS_EXTENDED = 'getOrderStatusExtended.do';
    const REGISTER_PRE_AUTH = 'registerPreAuth.do';
    const REFUND = 'refund.do';
    const REVERSE = 'reverse.do';
    const PAYMENT_ORDER_BINDING = 'paymentOrderBinding.do';
    const DEPOSIT = 'deposit.do';
    const GET_LAST_ORDERS_FOR_MERCHANTS = 'getLastOrdersForMerchants.do';

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
