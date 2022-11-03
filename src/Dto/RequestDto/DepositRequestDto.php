<?php

namespace Sun\EpayAlfa\Dto\RequestDto;

class DepositRequestDto extends AbstractRequestDto
{
    public function __construct(
        private string $orderId,
        private int $amount,
        ?string $language = null,
    ) {
        parent::__construct($language);
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }
}
