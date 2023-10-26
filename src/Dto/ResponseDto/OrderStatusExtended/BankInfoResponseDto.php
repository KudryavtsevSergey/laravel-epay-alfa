<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\ResponseDto\OrderStatusExtended;

class BankInfoResponseDto
{
    public function __construct(
        private readonly ?string $bankName = null,
        private readonly ?string $bankCountryCode = null,
        private readonly ?string $bankCountryName = null,
    ) {
    }

    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    public function getBankCountryCode(): ?string
    {
        return $this->bankCountryCode;
    }

    public function getBankCountryName(): ?string
    {
        return $this->bankCountryName;
    }
}
