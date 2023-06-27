<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\ResponseDto\ListOrderStatus;

class PaymentAmountInfoResponseDto
{
    public function __construct(
        private ?int $paymentState = null,
        private ?int $approvedAmount = null,
        private ?int $depositedAmount = null,
        private ?int $refundedAmount = null,
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
