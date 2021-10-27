<?php

namespace Sun\EpayAlfa\Dto\RequestDto;

class RefundRequestDto extends AbstractRequestDto
{
    private string $orderId;
    private int $amount;

    public function __construct(
        string $orderId,
        int $amount,
        ?string $language = null
    ) {
        parent::__construct($language);
        $this->orderId = $orderId;
        $this->amount = $amount;
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
