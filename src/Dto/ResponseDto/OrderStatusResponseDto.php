<?php

namespace Sun\EpayAlfa\Dto\ResponseDto;

use Sun\EpayAlfa\Dto\ResponseDto\ListOrderStatus\BindingInfoResponseDto;

class OrderStatusResponseDto extends AbstractErrorResponseDto
{
    private string $orderNumber;
    private int $amount;
    private ?int $orderStatus;
    private ?string $pan;
    private ?int $expiration;
    private ?string $cardholderName;
    private ?int $currency;
    private ?string $approvalCode;
    private ?string $ip;
    private ?BindingInfoResponseDto $bindingInfo;

    public function __construct(
        string $orderNumber,
        int $amount,
        ?int $orderStatus = null,
        ?string $pan = null,
        ?int $expiration = null,
        ?string $cardholderName = null,
        ?int $currency = null,
        ?string $approvalCode = null,
        ?string $ip = null,
        ?BindingInfoResponseDto $bindingInfo = null,
        ?int $errorCode = null,
        ?string $errorMessage = null
    ) {
        parent::__construct($errorCode, $errorMessage);
        $this->orderNumber = $orderNumber;
        $this->amount = $amount;
        $this->orderStatus = $orderStatus;
        $this->pan = $pan;
        $this->expiration = $expiration;
        $this->cardholderName = $cardholderName;
        $this->currency = $currency;
        $this->approvalCode = $approvalCode;
        $this->ip = $ip;
        $this->bindingInfo = $bindingInfo;
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
