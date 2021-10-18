<?php

namespace Sun\EpayAlfa\Dto\ResponseDto;

class OrderStatusResponseDto extends AbstractErrorResponseDto
{
    private int $orderStatus;
    private string $orderNumber;
    private string $pan;
    private string $expiration;
    private string $cardholderName;
    private int $amount;
    private int $currency;
    private string $approvalCode;
    private string $ip;
    private string $bindingInfo;
}
