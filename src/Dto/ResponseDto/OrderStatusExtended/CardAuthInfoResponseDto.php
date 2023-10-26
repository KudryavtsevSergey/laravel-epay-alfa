<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\ResponseDto\OrderStatusExtended;

class CardAuthInfoResponseDto
{
    public function __construct(
        private readonly string $paymentSystem,
        private readonly string $product,
        private readonly string $paymentWay,
        private readonly ?int $maskedPan = null,
        private readonly ?int $expiration = null,
        private readonly ?string $cardholderName = null,
        private readonly ?string $approvalCode = null,
        private readonly ?bool $chargeback = null,
        private readonly ?SecureAuthInfoResponseDto $secureAuthInfo = null,
    ) {
    }

    public function getPaymentSystem(): string
    {
        return $this->paymentSystem;
    }

    public function getProduct(): string
    {
        return $this->product;
    }

    public function getPaymentWay(): string
    {
        return $this->paymentWay;
    }

    public function getMaskedPan(): ?int
    {
        return $this->maskedPan;
    }

    public function getExpiration(): ?int
    {
        return $this->expiration;
    }

    public function getCardholderName(): ?string
    {
        return $this->cardholderName;
    }

    public function getApprovalCode(): ?string
    {
        return $this->approvalCode;
    }

    public function getChargeback(): ?bool
    {
        return $this->chargeback;
    }

    public function getSecureAuthInfo(): ?SecureAuthInfoResponseDto
    {
        return $this->secureAuthInfo;
    }
}
