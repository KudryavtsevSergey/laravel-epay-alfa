<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\ResponseDto\ListOrderStatus;

class ListOrderStatusResponseDto
{
    /**
     * @param string $orderNumber
     * @param int $orderStatus
     * @param int $actionCode
     * @param string $actionCodeDescription
     * @param int $amount
     * @param int $currency
     * @param string $date
     * @param int $errorCode
     * @param string|null $orderDescription
     * @param string|null $ip
     * @param MerchantOrderParamResponseDto[] $merchantOrderParams
     * @param AttributeResponseDto[] $attributes
     * @param CardAuthInfoResponseDto|null $cardAuthInfo
     * @param BindingInfoResponseDto|null $bindingInfo
     * @param string|null $authDateTime
     * @param string|null $terminalId
     * @param string|null $authRefNum
     * @param PaymentAmountInfoResponseDto|null $paymentAmountInfo
     * @param BankInfoResponseDto|null $bankInfo
     */
    public function __construct(
        private readonly string $orderNumber,
        private readonly int $orderStatus,
        private readonly int $actionCode,
        private readonly string $actionCodeDescription,
        private readonly int $amount,
        private readonly int $currency,
        private readonly string $date,
        private readonly int $errorCode,
        private readonly ?string $orderDescription = null,
        private readonly ?string $ip = null,
        private readonly array $merchantOrderParams = [],
        private readonly array $attributes = [],
        private readonly ?CardAuthInfoResponseDto $cardAuthInfo = null,
        private readonly ?BindingInfoResponseDto $bindingInfo = null,
        private readonly ?string $authDateTime = null,
        private readonly ?string $terminalId = null,
        private readonly ?string $authRefNum = null,
        private readonly ?PaymentAmountInfoResponseDto $paymentAmountInfo = null,
        private readonly ?BankInfoResponseDto $bankInfo = null,
    ) {
    }

    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    public function getOrderStatus(): int
    {
        return $this->orderStatus;
    }

    public function getActionCode(): int
    {
        return $this->actionCode;
    }

    public function getActionCodeDescription(): string
    {
        return $this->actionCodeDescription;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getCurrency(): int
    {
        return $this->currency;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    public function getOrderDescription(): ?string
    {
        return $this->orderDescription;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function getMerchantOrderParams(): array
    {
        return $this->merchantOrderParams;
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function getCardAuthInfo(): ?CardAuthInfoResponseDto
    {
        return $this->cardAuthInfo;
    }

    public function getBindingInfo(): ?BindingInfoResponseDto
    {
        return $this->bindingInfo;
    }

    public function getAuthDateTime(): ?string
    {
        return $this->authDateTime;
    }

    public function getTerminalId(): ?string
    {
        return $this->terminalId;
    }

    public function getAuthRefNum(): ?string
    {
        return $this->authRefNum;
    }

    public function getPaymentAmountInfo(): ?PaymentAmountInfoResponseDto
    {
        return $this->paymentAmountInfo;
    }

    public function getBankInfo(): ?BankInfoResponseDto
    {
        return $this->bankInfo;
    }
}
