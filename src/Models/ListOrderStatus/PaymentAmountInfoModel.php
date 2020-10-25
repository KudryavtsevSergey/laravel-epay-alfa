<?php

namespace Sun\EpayAlfa\Models\ListOrderStatus;

use Sun\EpayAlfa\Models\AbstractModel;

class PaymentAmountInfoModel extends AbstractModel
{
    private ?int $paymentState = null;
    private ?int $approvedAmount = null;
    private ?int $depositedAmount = null;
    private ?int $refundedAmount = null;

    public function getPaymentState(): ?int
    {
        return $this->paymentState;
    }

    public function setPaymentState(?int $paymentState): self
    {
        $this->paymentState = $paymentState;
        return $this;
    }

    public function getApprovedAmount(): ?int
    {
        return $this->approvedAmount;
    }

    public function setApprovedAmount(?int $approvedAmount): self
    {
        $this->approvedAmount = $approvedAmount;
        return $this;
    }

    public function getDepositedAmount(): ?int
    {
        return $this->depositedAmount;
    }

    public function setDepositedAmount(?int $depositedAmount): self
    {
        $this->depositedAmount = $depositedAmount;
        return $this;
    }

    public function getRefundedAmount(): ?int
    {
        return $this->refundedAmount;
    }

    public function setRefundedAmount(?int $refundedAmount): self
    {
        $this->refundedAmount = $refundedAmount;
        return $this;
    }

    protected function fillFromData(array $data)
    {
        $this->setPaymentState($data['paymentState'] ?? null)
            ->setApprovedAmount($data['approvedAmount'] ?? null)
            ->setDepositedAmount($data['depositedAmount'] ?? null)
            ->setRefundedAmount($data['refundedAmount'] ?? null);
    }
}
