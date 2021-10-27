<?php

namespace Sun\EpayAlfa\Dto\ResponseDto\ListOrderStatus;

class CardAuthInfoResponseDto
{
    private ?int $pan;
    private ?int $expiration;
    private ?string $cardholderName;
    private ?string $approvalCode;

    public function __construct(
        ?int $pan = null,
        ?int $expiration = null,
        ?string $cardholderName = null,
        ?string $approvalCode = null
    ) {
        $this->pan = $pan;
        $this->expiration = $expiration;
        $this->cardholderName = $cardholderName;
        $this->approvalCode = $approvalCode;
    }

    public function getPan(): ?int
    {
        return $this->pan;
    }

    public function getExpiration(): ?int
    {
        return $this->expiration;
    }

    public function getCardholderName(): ?string
    {
        return $this->cardholderName;
    }

    public function getApprovalCode(): ?string
    {
        return $this->approvalCode;
    }
}
