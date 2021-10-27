<?php

namespace Sun\EpayAlfa\Dto\ResponseDto\ListOrderStatus;

class PaymentAmountInfoResponseDto
{
    private ?int $paymentState;
    private ?int $approvedAmount;
    private ?int $depositedAmount;
    private ?int $refundedAmount;

    public function __construct(
        ?int $paymentState = null,
        ?int $approvedAmount = null,
        ?int $depositedAmount = null,
        ?int $refundedAmount = null
    ) {
        $this->paymentState = $paymentState;
        $this->approvedAmount = $approvedAmount;
        $this->depositedAmount = $depositedAmount;
        $this->refundedAmount = $refundedAmount;
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
