<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\ResponseDto\ListOrderStatus;

class CardAuthInfoResponseDto
{
    public function __construct(
        private readonly ?int $pan = null,
        private readonly ?int $expiration = null,
        private readonly ?string $cardholderName = null,
        private readonly ?string $approvalCode = null,
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
