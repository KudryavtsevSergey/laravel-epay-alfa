<?php

namespace Sun\EpayAlfa\Dto\ResponseDto\OrderStatusExtended;

class CardAuthInfoResponseDto
{
    private string $paymentSystem;
    private string $product;
    private string $paymentWay;
    private ?int $maskedPan;
    private ?int $expiration;
    private ?string $cardholderName;
    private ?string $approvalCode;
    private ?bool $chargeback;
    private ?SecureAuthInfoResponseDto $secureAuthInfo;

    public function __construct(
        string $paymentSystem,
        string $product,
        string $paymentWay,
        ?int $maskedPan = null,
        ?int $expiration = null,
        ?string $cardholderName = null,
        ?string $approvalCode = null,
        ?bool $chargeback = null,
        ?SecureAuthInfoResponseDto $secureAuthInfo = null
    ) {
        $this->paymentSystem = $paymentSystem;
        $this->product = $product;
        $this->paymentWay = $paymentWay;
        $this->maskedPan = $maskedPan;
        $this->expiration = $expiration;
        $this->cardholderName = $cardholderName;
        $this->approvalCode = $approvalCode;
        $this->chargeback = $chargeback;
        $this->secureAuthInfo = $secureAuthInfo;
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
