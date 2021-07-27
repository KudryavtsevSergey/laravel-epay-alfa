<?php

namespace Sun\EpayAlfa\Enum;

class AlfaProviderEnum extends AbstractEnum
{
    const BY = 'by';
    const RU = 'ru';

    public static function getValues(): array
    {
        return [
            self::BY,
            self::RU,
        ];
    }
}
