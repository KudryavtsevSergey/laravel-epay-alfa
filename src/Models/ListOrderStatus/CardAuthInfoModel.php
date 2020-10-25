<?php

namespace Sun\EpayAlfa\Models\ListOrderStatus;

use Sun\EpayAlfa\Models\AbstractModel;

class CardAuthInfoModel extends AbstractModel
{
    private ?int $pan = null;
    private ?int $expiration = null;
    private ?string $cardholderName = null;
    private ?string $approvalCode = null;

    public function getPan(): ?int
    {
        return $this->pan;
    }

    public function setPan(?int $pan): self
    {
        $this->pan = $pan;
        return $this;
    }

    public function getExpiration(): ?int
    {
        return $this->expiration;
    }

    public function setExpiration(?int $expiration): self
    {
        $this->expiration = $expiration;
        return $this;
    }

    public function getCardholderName(): ?string
    {
        return $this->cardholderName;
    }

    public function setCardholderName(?string $cardholderName): self
    {
        $this->cardholderName = $cardholderName;
        return $this;
    }

    public function getApprovalCode(): ?string
    {
        return $this->approvalCode;
    }

    public function setApprovalCode(?string $approvalCode): self
    {
        $this->approvalCode = $approvalCode;
        return $this;
    }

    protected function fillFromData(array $data)
    {
        $this->setPan($data['pan'] ?? null)
            ->setExpiration($data['expiration'] ?? null)
            ->setCardholderName($data['cardholderName'] ?? null)
            ->setApprovalCode($data['approvalCode'] ?? null);
    }
}
