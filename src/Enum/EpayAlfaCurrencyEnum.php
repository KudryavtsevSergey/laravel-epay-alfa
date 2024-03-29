<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Enum;

class EpayAlfaCurrencyEnum extends AbstractEnum
{
    public const RUB = 643;
    public const USD = 840;
    public const EUR = 978;
    public const BYN = 933;

    public static function getValues(): array
    {
        return [
            self::RUB,
            self::USD,
            self::EUR,
            self::BYN,
        ];
    }
}
