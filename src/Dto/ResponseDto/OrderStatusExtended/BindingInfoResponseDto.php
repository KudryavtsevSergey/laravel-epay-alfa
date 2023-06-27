<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\ResponseDto\OrderStatusExtended;

class BindingInfoResponseDto
{
    public function __construct(
        private ?string $clientId = null,
        private ?string $bindingId = null,
        private ?string $authDateTime = null,
        private ?string $authRefNum = null,
        private ?string $terminalId = null,
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

    public function getAuthDateTime(): ?string
    {
        return $this->authDateTime;
    }

    public function getAuthRefNum(): ?string
    {
        return $this->authRefNum;
    }

    public function getTerminalId(): ?string
    {
        return $this->terminalId;
    }
}
