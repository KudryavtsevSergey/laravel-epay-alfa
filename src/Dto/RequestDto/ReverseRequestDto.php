<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\RequestDto;

class ReverseRequestDto extends AbstractOrderRequestDto
{
    public function __construct(
        ?string $orderNumber,
        ?string $orderId = null,
        private ?string $amount = null,
        ?string $language = null,
    ) {
        parent::__construct($orderNumber, $orderId, $language);
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }
}
