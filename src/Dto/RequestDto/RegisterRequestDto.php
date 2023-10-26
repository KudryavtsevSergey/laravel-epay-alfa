<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\RequestDto;

use Sun\EpayAlfa\Enum\EpayAlfaCurrencyEnum;

class RegisterRequestDto extends AbstractRequestDto
{
    public function __construct(
        private readonly string $orderNumber,
        private readonly int $amount,
        private readonly int $currency,
        private readonly string $returnUrl,
        private readonly ?string $failUrl = null,
        private readonly ?string $description = null,
        private readonly ?string $pageView = null,
        private readonly ?string $clientId = null,
        private readonly ?string $merchantLogin = null,
        private readonly array $jsonParams = [],
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
