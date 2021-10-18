<?php

namespace Sun\EpayAlfa\Dto\RequestDto;

class ReverseRequestDto extends AbstractOrderRequestDto
{
    private ?string $amount;

    public function __construct(?string $orderNumber, ?string $orderId  = null, ?string $amount = null)
    {
        parent::__construct($orderNumber, $orderId);
        $this->amount = $amount;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(?string $amount): self
    {
        $this->amount = $amount;
        return $this;
    }
}
