<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\ResponseDto\ListOrderStatus;

class BindingInfoResponseDto
{
    public function __construct(
        private readonly ?string $clientId = null,
        private readonly ?string $bindingId = null,
    ) {
    }

    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    public function getBindingId(): ?string
    {
        return $this->bindingId;
    }
}
