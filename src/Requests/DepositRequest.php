<?php

namespace Sun\EpayAlfa\Requests;

class DepositRequest extends AbstractRequest
{
    private string $orderId;
    private int $amount;

    public function __construct(string $orderId, int $amount)
    {
        $this->orderId = $orderId;
        $this->amount = $amount;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function setOrderId(string $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    public function toArray()
    {
        return [
            'orderId' => $this->orderId,
            'amount' => $this->amount,
        ];
    }
}
