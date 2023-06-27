<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Enum;

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
