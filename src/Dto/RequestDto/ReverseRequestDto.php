<?php

namespace Sun\EpayAlfa\Dto\RequestDto;

class ReverseRequestDto extends AbstractOrderRequestDto
{
    private ?string $amount;

    public function __construct(
        ?string $orderNumber,
        ?string $orderId = null,
        ?string $amount = null,
        ?string $language = null
    ) {
        parent::__construct($orderNumber, $orderId, $language);
        $this->amount = $amount;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }
}
