<?php

namespace Sun\EpayAlfa\Dto\ResponseDto\ListOrderStatus;

class CardAuthInfoResponseDto
{
    private int $pan;
    private int $expiration;
    private string $cardholderName;
    private string $approvalCode;
}
