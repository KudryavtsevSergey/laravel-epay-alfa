<?php

use Sun\EpayAlfa\Enum\NotificationTypeEnum;

return [
    'default_provider' => 'ru',

    'providers' => [
        'ru' => [
            'username' => env('EPAY_ALFA_RU_USERNAME'),
            'password' => env('EPAY_ALFA_RU_PASSWORD'),
            'gateway' => env('EPAY_ALFA_RU_GATEWAY', 'https://pay.alfabank.ru/payment/rest'),
            'notification_type' => env('EPAY_ALFA_RU_NOTIFICATION_TYPE', NotificationTypeEnum::SYMMETRIC_CHECKSUM),
        ],
    ],
    'secret' => env('EPAY_ALFA_RU_SECRET'),
];
