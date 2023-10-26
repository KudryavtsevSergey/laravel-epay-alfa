<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\ResponseDto\ListOrderStatus;

class PaymentAmountInfoResponseDto
{
    public function __construct(
        private readonly ?int $paymentState = null,
        private readonly ?int $approvedAmount = null,
        private readonly ?int $depositedAmount = null,
        private readonly ?int $refundedAmount = null,
    ) {
    }

    public function getPaymentState(): ?int
    {
        return $this->paymentState;
    }

    public function getApprovedAmount(): ?int
    {
        return $this->approvedAmount;
    }

    public function getDepositedAmount(): ?int
    {
        return $this->depositedAmount;
    }

    public function getRefundedAmount(): ?int
    {
        return $this->refundedAmount;
    }
}
