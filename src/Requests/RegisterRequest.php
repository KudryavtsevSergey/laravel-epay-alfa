<?php

namespace Sun\EpayAlfa\Requests;

use Sun\EpayAlfa\Contracts\EpayAlfaAmountContract;

class RegisterRequest extends AbstractRequest
{
    private string $orderNumber;
    private int $amount;
    private int $currency;
    private string $returnUrl;
    private ?string $failUrl = null;
    private ?string $description = null;
    private ?string $pageView = null;
    private ?string $clientId = null;
    private ?string $merchantLogin = null;

    public function __construct(string $orderNumber, EpayAlfaAmountContract $amount, string $returnUrl)
    {
        $this->orderNumber = $orderNumber;
        $this->amount = $amount->getAmount() * 100;
        $this->currency = $amount->getEpayAlfaCurrency();
        $this->returnUrl = $returnUrl;
    }

    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(string $orderNumber): self
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    public function getAmount(): float
    {
        return $this->amount / 100;
    }

    public function setAmount(float $amount): self
    {
        $this->amount = $amount * 100;
        return $this;
    }

    public function getCurrency(): int
    {
        return $this->currency;
    }

    public function setCurrency(int $currency): self
    {
        $this->currency = $currency;
        return $this;
    }

    public function getReturnUrl(): string
    {
        return $this->returnUrl;
    }

    public function setReturnUrl(string $returnUrl): self
    {
        $this->returnUrl = $returnUrl;
        return $this;
    }

    public function getFailUrl(): ?string
    {
        return $this->failUrl;
    }

    public function setFailUrl(?string $failUrl): self
    {
        $this->failUrl = $failUrl;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getPageView(): ?string
    {
        return $this->pageView;
    }

    public function setPageView(?string $pageView): self
    {
        $this->pageView = $pageView;
        return $this;
    }

    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    public function setClientId(?string $clientId): self
    {
        $this->clientId = $clientId;
        return $this;
    }

    public function getMerchantLogin(): ?string
    {
        return $this->merchantLogin;
    }

    public function setMerchantLogin(?string $merchantLogin): self
    {
        $this->merchantLogin = $merchantLogin;
        return $this;
    }

    public function toArray()
    {
        return [
            'orderNumber' => $this->orderNumber,
            'amount' => $this->amount,
            'currency' => $this->currency,
            'returnUrl' => $this->returnUrl,
            'failUrl' => $this->failUrl,
            'description' => $this->description,
            'pageView' => $this->pageView,
            'clientId' => $this->clientId,
            'merchantLogin' => $this->merchantLogin,
        ];
    }
}
