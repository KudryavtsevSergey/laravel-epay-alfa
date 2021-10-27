<?php

namespace Sun\EpayAlfa\Enum;

class OperationStatusEnum extends AbstractEnum
{
    public const SUCCESS = 1;
    public const ERROR = 0;

    public static function getValues(): array
    {
        return [
            self::SUCCESS,
            self::ERROR,
        ];
    }
}
