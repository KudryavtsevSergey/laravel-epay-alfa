<?php

namespace Sun\EpayAlfa\Dto\RequestDto;

use Sun\EpayAlfa\Contracts\EpayAlfaAmountContract;

class RegisterRequestDto extends AbstractRequestDto
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
    private array $jsonParams = [];

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

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getCurrency(): int
    {
        return $this->currency;
    }

    public function getReturnUrl(): string
    {
        return $this->returnUrl;
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

    public function getJsonParams(): array
    {
        return $this->jsonParams;
    }

    public function setJsonParams(array $jsonParams): self
    {
        $this->jsonParams = $jsonParams;
        return $this;
    }
}
