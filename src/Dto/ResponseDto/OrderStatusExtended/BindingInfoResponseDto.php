<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\ResponseDto\OrderStatusExtended;

class BindingInfoResponseDto
{
    public function __construct(
        private readonly ?string $clientId = null,
        private readonly ?string $bindingId = null,
        private readonly ?string $authDateTime = null,
        private readonly ?string $authRefNum = null,
        private readonly ?string $terminalId = null,
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
