<?php

namespace Sun\EpayAlfa\Dto\RequestDto;

use Sun\EpayAlfa\Enum\EpayAlfaCurrencyEnum;

class RegisterRequestDto extends AbstractRequestDto
{
    public function __construct(
        private string $orderNumber,
        private int $amount,
        private int $currency,
        private string $returnUrl,
        private ?string $failUrl = null,
        private ?string $description = null,
        private ?string $pageView = null,
        private ?string $clientId = null,
        private ?string $merchantLogin = null,
        private array $jsonParams = [],
        ?string $language = null,
    ) {
        parent::__construct($language);
        EpayAlfaCurrencyEnum::checkAllowedValue($currency);
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
