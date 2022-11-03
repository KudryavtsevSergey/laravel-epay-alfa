<?php

namespace Sun\EpayAlfa\Dto\ResponseDto\OrderStatusExtended;

class CardAuthInfoResponseDto
{
    public function __construct(
        private string $paymentSystem,
        private string $product,
        private string $paymentWay,
        private ?int $maskedPan = null,
        private ?int $expiration = null,
        private ?string $cardholderName = null,
        private ?string $approvalCode = null,
        private ?bool $chargeback = null,
        private ?SecureAuthInfoResponseDto $secureAuthInfo = null,
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
