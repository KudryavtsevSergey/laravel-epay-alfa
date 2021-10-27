<?php

use Sun\EpayAlfa\Dto\ResponseDto\OrderPaymentDto;
use Sun\EpayAlfa\Enum\AlfaProviderEnum;
use Sun\EpayAlfa\Enum\NotificationTypeEnum;

return [
    /**
     * Must implements:
     * Sun\EpayAlfa\Dto\ResponseDto\ResponseDtoInterface
     * Sun\EpayAlfa\Service\ChecksumVerifier\ChecksumInterface
     */
    'checksum_implementation' => OrderPaymentDto::class,

    'providers' => [
        AlfaProviderEnum::RU => [
            'username' => env('EPAY_ALFA_RU_USERNAME'),
            'password' => env('EPAY_ALFA_RU_PASSWORD'),
            'gateway' => env('EPAY_ALFA_RU_GATEWAY', 'https://pay.alfabank.ru/payment/rest'),
            'notification_type' => env('EPAY_ALFA_RU_NOTIFICATION_TYPE', NotificationTypeEnum::SYMMETRIC_CHECKSUM),
        ],
    ],
    'secret' => env('EPAY_ALFA_SECRET'),
];
