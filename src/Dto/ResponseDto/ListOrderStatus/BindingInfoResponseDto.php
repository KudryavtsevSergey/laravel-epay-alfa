<?php

namespace Sun\EpayAlfa\Dto\ResponseDto\ListOrderStatus;

class BindingInfoResponseDto
{
    private ?string $clientId;
    private ?string $bindingId;

    public function __construct(?string $clientId = null, ?string $bindingId = null)
    {
        $this->clientId = $clientId;
        $this->bindingId = $bindingId;
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
