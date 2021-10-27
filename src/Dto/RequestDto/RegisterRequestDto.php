<?php

namespace Sun\EpayAlfa\Dto\RequestDto;

use Sun\EpayAlfa\Enum\EpayAlfaCurrencyEnum;

class RegisterRequestDto extends AbstractRequestDto
{
    private string $orderNumber;
    private int $amount;
    private int $currency;
    private string $returnUrl;
    private ?string $failUrl;
    private ?string $description;
    private ?string $pageView;
    private ?string $clientId;
    private ?string $merchantLogin;
    private array $jsonParams;

    public function __construct(
        string $orderNumber,
        int $amount,
        int $currency,
        string $returnUrl,
        ?string $failUrl = null,
        ?string $description = null,
        ?string $pageView = null,
        ?string $clientId = null,
        ?string $merchantLogin = null,
        array $jsonParams = [],
        ?string $language = null
    ) {
        parent::__construct($language);
        EpayAlfaCurrencyEnum::checkAllowedValue($currency);
        $this->orderNumber = $orderNumber;
        $this->amount = $amount;
        $this->currency = $currency;
        $this->returnUrl = $returnUrl;
        $this->failUrl = $failUrl;
        $this->description = $description;
        $this->pageView = $pageView;
        $this->clientId = $clientId;
        $this->merchantLogin = $merchantLogin;
        $this->jsonParams = $jsonParams;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getPageView(): ?string
    {
        return $this->pageView;
    }

    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    public function getMerchantLogin(): ?string
    {
        return $this->merchantLogin;
    }

    public function getJsonParams(): array
    {
        return $this->jsonParams;
    }
}
