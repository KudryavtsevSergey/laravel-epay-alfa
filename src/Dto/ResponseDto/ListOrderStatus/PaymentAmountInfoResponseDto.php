<?php

namespace Sun\EpayAlfa\Dto\ResponseDto\ListOrderStatus;

class PaymentAmountInfoResponseDto
{
    private int $paymentState;
    private int $approvedAmount;
    private int $depositedAmount;
    private int $refundedAmount;
}
