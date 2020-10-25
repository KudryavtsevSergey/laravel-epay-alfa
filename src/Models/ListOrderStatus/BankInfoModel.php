<?php

namespace Sun\EpayAlfa\Models\ListOrderStatus;

use Sun\EpayAlfa\Models\AbstractModel;

class BankInfoModel extends AbstractModel
{
    private ?string $bankName = null;
    private ?string $bankCountryCode = null;
    private ?string $bankCountryName = null;

    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    public function setBankName(?string $bankName): self
    {
        $this->bankName = $bankName;
        return $this;
    }

    public function getBankCountryCode(): ?string
    {
        return $this->bankCountryCode;
    }

    public function setBankCountryCode(?string $bankCountryCode): self
    {
        $this->bankCountryCode = $bankCountryCode;
        return $this;
    }

    public function getBankCountryName(): ?string
    {
        return $this->bankCountryName;
    }

    public function setBankCountryName(?string $bankCountryName): self
    {
        $this->bankCountryName = $bankCountryName;
        return $this;
    }

    protected function fillFromData(array $data)
    {
        $this->setBankName($data['bankName'] ?? null)
            ->setBankCountryCode($data['bankCountryCode'] ?? null)
            ->setBankCountryName($data['bankCountryName'] ?? null);
    }
}
