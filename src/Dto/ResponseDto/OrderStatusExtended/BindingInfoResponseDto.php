<?php

namespace Sun\EpayAlfa\Dto\ResponseDto\OrderStatusExtended;

class BindingInfoResponseDto
{
    private ?string $clientId;
    private ?string $bindingId;
    private ?string $authDateTime;
    private ?string $authRefNum;
    private ?string $terminalId;

    public function __construct(
        ?string $clientId = null,
        ?string $bindingId = null,
        ?string $authDateTime = null,
        ?string $authRefNum = null,
        ?string $terminalId = null
    ) {
        $this->clientId = $clientId;
        $this->bindingId = $bindingId;
        $this->authDateTime = $authDateTime;
        $this->authRefNum = $authRefNum;
        $this->terminalId = $terminalId;
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
