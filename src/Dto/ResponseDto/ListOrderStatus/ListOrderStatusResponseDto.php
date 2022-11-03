<?php

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
        private string $orderNumber,
        private int $orderStatus,
        private int $actionCode,
        private string $actionCodeDescription,
        private int $amount,
        private int $currency,
        private string $date,
        private int $errorCode,
        private ?string $orderDescription = null,
        private ?string $ip = null,
        private array $merchantOrderParams = [],
        private array $attributes = [],
        private ?CardAuthInfoResponseDto $cardAuthInfo = null,
        private ?BindingInfoResponseDto $bindingInfo = null,
        private ?string $authDateTime = null,
        private ?string $terminalId = null,
        private ?string $authRefNum = null,
        private ?PaymentAmountInfoResponseDto $paymentAmountInfo = null,
        private ?BankInfoResponseDto $bankInfo = null,
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
