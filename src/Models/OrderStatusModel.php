<?php

namespace Sun\EpayAlfa\Models;

class OrderStatusModel extends AbstractErrorModel
{
    private ?int $orderStatus = null;
    private ?string $orderNumber = null;
    private ?string $pan = null;
    private ?string $expiration = null;
    private ?string $cardholderName = null;
    private ?int $amount = null;
    private ?int $currency = null;
    private ?string $approvalCode = null;
    private ?string $ip = null;
    private ?string $bindingInfo = null;

    public function getOrderStatus(): ?int
    {
        return $this->orderStatus;
    }

    public function setOrderStatus(?int $orderStatus): self
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(?string $orderNumber): self
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    public function getPan(): ?string
    {
        return $this->pan;
    }

    public function setPan(?string $pan): self
    {
        $this->pan = $pan;
        return $this;
    }

    public function getExpiration(): ?string
    {
        return $this->expiration;
    }

    public function setExpiration(?string $expiration): self
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

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    public function getCurrency(): ?int
    {
        return $this->currency;
    }

    public function setCurrency(?int $currency): self
    {
        $this->currency = $currency;
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

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(?string $ip): self
    {
        $this->ip = $ip;
        return $this;
    }

    public function getBindingInfo(): ?string
    {
        return $this->bindingInfo;
    }

    public function setBindingInfo(?string $bindingInfo): self
    {
        $this->bindingInfo = $bindingInfo;
        return $this;
    }

    protected function fillFromData(array $data)
    {
        $this->setOrderStatus($data['OrderStatus'] ?? null)
            ->setOrderNumber($data['OrderNumber'] ?? null)
            ->setPan($data['Pan'] ?? null)
            ->setExpiration($data['expiration'] ?? null)
            ->setCardholderName($data['cardholderName'] ?? null)
            ->setAmount($data['Amount'] ?? null)
            ->setCurrency($data['currency'] ?? null)
            ->setApprovalCode($data['approvalCode'] ?? null)
            ->setIp($data['Ip'] ?? null)
            ->setBindingInfo($data['BindingInfo'] ?? null);
    }
}
