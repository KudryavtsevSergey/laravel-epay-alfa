<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\ResponseDto;

use Sun\EpayAlfa\Dto\ResponseDto\ListOrderStatus\BindingInfoResponseDto;

class OrderStatusResponseDto extends AbstractErrorResponseDto
{
    public function __construct(
        private string $orderNumber,
        private int $amount,
        private ?int $orderStatus = null,
        private ?string $pan = null,
        private ?int $expiration = null,
        private ?string $cardholderName = null,
        private ?int $currency = null,
        private ?string $approvalCode = null,
        private ?string $ip = null,
        private ?BindingInfoResponseDto $bindingInfo = null,
        ?int $errorCode = null,
        ?string $errorMessage = null,
    ) {
        parent::__construct($errorCode, $errorMessage);
    }

    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getOrderStatus(): ?int
    {
        return $this->orderStatus;
    }

    public function getPan(): ?string
    {
        return $this->pan;
    }

    public function getExpiration(): ?int
    {
        return $this->expiration;
    }

    public function getCardholderName(): ?string
    {
        return $this->cardholderName;
    }

    public function getCurrency(): ?int
    {
        return $this->currency;
    }

    public function getApprovalCode(): ?string
    {
        return $this->approvalCode;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function getBindingInfo(): ?BindingInfoResponseDto
    {
        return $this->bindingInfo;
    }
}
