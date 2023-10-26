<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\ResponseDto;

use Sun\EpayAlfa\Dto\ResponseDto\ListOrderStatus\BindingInfoResponseDto;

class OrderStatusResponseDto extends AbstractErrorResponseDto
{
    public function __construct(
        private readonly string $orderNumber,
        private readonly int $amount,
        private readonly ?int $orderStatus = null,
        private readonly ?string $pan = null,
        private readonly ?int $expiration = null,
        private readonly ?string $cardholderName = null,
        private readonly ?int $currency = null,
        private readonly ?string $approvalCode = null,
        private readonly ?string $ip = null,
        private readonly ?BindingInfoResponseDto $bindingInfo = null,
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
