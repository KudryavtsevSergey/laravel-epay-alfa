<?php

namespace Sun\EpayAlfa\Dto\ResponseDto\OrderStatusExtended;

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
