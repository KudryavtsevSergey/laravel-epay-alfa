<?php

namespace Sun\EpayAlfa\Dto\ResponseDto\ListOrderStatus;

class BindingInfoResponseDto
{
    public function __construct(
        private ?string $clientId = null,
        private ?string $bindingId = null,
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
