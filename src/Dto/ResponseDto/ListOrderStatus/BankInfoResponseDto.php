<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\ResponseDto\ListOrderStatus;

class BankInfoResponseDto
{
    public function __construct(
        private ?string $bankName = null,
        private ?string $bankCountryCode = null,
        private ?string $bankCountryName = null,
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
