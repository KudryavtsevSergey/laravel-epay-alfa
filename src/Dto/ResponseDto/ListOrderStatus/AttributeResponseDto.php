<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\ResponseDto\ListOrderStatus;

class AttributeResponseDto
{
    public function __construct(
        private readonly string $name,
        private readonly string $value,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
