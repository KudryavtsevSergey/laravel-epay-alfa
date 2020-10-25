<?php

namespace Sun\EpayAlfa\Models;

class OrderStatusExtendedModel extends AbstractErrorModel
{
    private ?string $orderNumber = null;
    private ?int $orderStatus = null;
    private ?string $actionCode = null;
    private ?string $actionCodeDescription = null;
    private ?int $amount = null;
    private ?int $currency = null;
    private ?string $date = null;
    private ?string $orderDescription = null;
    private ?string $ip = null;
    private array $merchantOrderParams = [];
    private array $cardAuthInfo = [];
    private array $bindingInfo = [];
    private array $paymentAmountInfo = [];
    private array $bankInfo = [];

    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(?string $orderNumber): self
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    public function getOrderStatus(): ?int
    {
        return $this->orderStatus;
    }

    public function setOrderStatus(?int $orderStatus): self
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    public function getActionCode(): ?string
    {
        return $this->actionCode;
    }

    public function setActionCode(?string $actionCode): self
    {
        $this->actionCode = $actionCode;
        return $this;
    }

    public function getActionCodeDescription(): ?string
    {
        return $this->actionCodeDescription;
    }

    public function setActionCodeDescription(?string $actionCodeDescription): self
    {
        $this->actionCodeDescription = $actionCodeDescription;
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

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(?string $date): self
    {
        $this->date = $date;
        return $this;
    }

    public function getOrderDescription(): ?string
    {
        return $this->orderDescription;
    }

    public function setOrderDescription(?string $orderDescription): self
    {
        $this->orderDescription = $orderDescription;
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

    public function getMerchantOrderParams(): array
    {
        return $this->merchantOrderParams;
    }

    public function setMerchantOrderParams(array $merchantOrderParams): self
    {
        $this->merchantOrderParams = $merchantOrderParams;
        return $this;
    }

    public function getCardAuthInfo(): array
    {
        return $this->cardAuthInfo;
    }

    public function setCardAuthInfo(array $cardAuthInfo): self
    {
        $this->cardAuthInfo = $cardAuthInfo;
        return $this;
    }

    public function getBindingInfo(): array
    {
        return $this->bindingInfo;
    }

    public function setBindingInfo(array $bindingInfo): self
    {
        $this->bindingInfo = $bindingInfo;
        return $this;
    }

    public function getPaymentAmountInfo(): array
    {
        return $this->paymentAmountInfo;
    }

    public function setPaymentAmountInfo(array $paymentAmountInfo): self
    {
        $this->paymentAmountInfo = $paymentAmountInfo;
        return $this;
    }

    public function getBankInfo(): array
    {
        return $this->bankInfo;
    }

    public function setBankInfo(array $bankInfo): self
    {
        $this->bankInfo = $bankInfo;
        return $this;
    }

    protected function fillFromData(array $data)
    {
        $this->setOrderNumber($data['orderNumber'] ?? null)
            ->setOrderStatus($data['orderStatus'] ?? null)
            ->setActionCode($data['actionCode'] ?? null)
            ->setActionCodeDescription($data['actionCodeDescription'] ?? null)
            ->setAmount($data['amount'] ?? null)
            ->setCurrency($data['currency'] ?? null)
            ->setDate($data['date'] ?? null)
            ->setOrderDescription($data['orderDescription'] ?? null)
            ->setIp($data['ip'] ?? null)
            ->setMerchantOrderParams($data['merchantOrderParams'] ?? [])
            ->setCardAuthInfo($data['cardAuthInfo'] ?? [])
            ->setBindingInfo($data['bindingInfo'] ?? [])
            ->setPaymentAmountInfo($data['paymentAmountInfo'] ?? [])
            ->setBankInfo($data['bankInfo'] ?? []);
    }
}
