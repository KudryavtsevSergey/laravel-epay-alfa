<?php

namespace Sun\EpayAlfa\Dto\ResponseDto\ListOrderStatus;

class CardAuthInfoResponseDto
{
    public function __construct(
        private ?int $pan = null,
        private ?int $expiration = null,
        private ?string $cardholderName = null,
        private ?string $approvalCode = null,
    ) {
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
