<?php

namespace Sun\EpayAlfa\Dto\ResponseDto\OrderStatusExtended;

class PaymentAmountInfoResponseDto
{
    private ?int $approvedAmount;
    private ?int $depositedAmount;
    private ?int $refundedAmount;
    private ?int $paymentState;
    private ?int $feeAmount;

    public function __construct(
        ?int $approvedAmount = null,
        ?int $depositedAmount = null,
        ?int $refundedAmount = null,
        ?int $paymentState = null,
        ?int $feeAmount = null
    ) {
        $this->approvedAmount = $approvedAmount;
        $this->depositedAmount = $depositedAmount;
        $this->refundedAmount = $refundedAmount;
        $this->paymentState = $paymentState;
        $this->feeAmount = $feeAmount;
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

    public function getPaymentState(): ?int
    {
        return $this->paymentState;
    }

    public function getFeeAmount(): ?int
    {
        return $this->feeAmount;
    }
}
