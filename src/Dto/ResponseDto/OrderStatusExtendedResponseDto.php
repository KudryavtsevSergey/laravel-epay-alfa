<?php

namespace Sun\EpayAlfa\Dto\ResponseDto;

class OrderStatusExtendedResponseDto extends AbstractErrorResponseDto
{
    private string $orderNumber;
    private int $orderStatus;
    private string $actionCode;
    private string $actionCodeDescription;
    private int $amount;
    private int $currency;
    private string $date;
    private string $orderDescription;
    private string $ip;
    private array $merchantOrderParams;
    private array $cardAuthInfo;
    private array $bindingInfo;
    private array $paymentAmountInfo;
    private array $bankInfo;
}
