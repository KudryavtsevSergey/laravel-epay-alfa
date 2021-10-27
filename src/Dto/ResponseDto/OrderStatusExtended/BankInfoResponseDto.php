<?php

namespace Sun\EpayAlfa\Dto\ResponseDto\OrderStatusExtended;

class BankInfoResponseDto
{
    private ?string $bankName;
    private ?string $bankCountryCode;
    private ?string $bankCountryName;

    public function __construct(
        ?string $bankName = null,
        ?string $bankCountryCode = null,
        ?string $bankCountryName = null
    ) {
        $this->bankName = $bankName;
        $this->bankCountryCode = $bankCountryCode;
        $this->bankCountryName = $bankCountryName;
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
