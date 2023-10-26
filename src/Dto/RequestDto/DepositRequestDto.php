<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\RequestDto;

class DepositRequestDto extends AbstractRequestDto
{
    public function __construct(
        private readonly string $orderId,
        private readonly int $amount,
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
