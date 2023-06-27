<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\RequestDto;

class RefundRequestDto extends AbstractRequestDto
{
    public function __construct(
        private string $orderId,
        private int $amount,
        ?string $language = null
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
