<?php

namespace Sun\EpayAlfa\Enum;

use App\Enum\AbstractEnum;

class AlfaProviderEnum extends AbstractEnum
{
    public const BY = 'by';
    public const RU = 'ru';

    public static function getValues(): array
    {
        return [
            self::BY,
            self::RU,
        ];
    }
}
