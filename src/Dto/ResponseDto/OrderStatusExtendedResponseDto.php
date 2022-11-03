<?php

namespace Sun\EpayAlfa\Dto\ResponseDto;

use Sun\EpayAlfa\Dto\ResponseDto\ListOrderStatus\MerchantOrderParamResponseDto;
use Sun\EpayAlfa\Dto\ResponseDto\OrderStatusExtended\BankInfoResponseDto;
use Sun\EpayAlfa\Dto\ResponseDto\OrderStatusExtended\BindingInfoResponseDto;
use Sun\EpayAlfa\Dto\ResponseDto\OrderStatusExtended\CardAuthInfoResponseDto;
use Sun\EpayAlfa\Dto\ResponseDto\OrderStatusExtended\PaymentAmountInfoResponseDto;

class OrderStatusExtendedResponseDto extends AbstractErrorResponseDto
{
    /**
     * @param string $orderNumber
     * @param int $actionCode
     * @param string $actionCodeDescription
     * @param int $amount
     * @param int|null $orderStatus
     * @param int|null $currency
     * @param string|null $date
     * @param string|null $orderDescription
     * @param string|null $ip
     * @param MerchantOrderParamResponseDto[] $merchantOrderParams
     * @param CardAuthInfoResponseDto|null $cardAuthInfo
     * @param BindingInfoResponseDto|null $bindingInfo
     * @param PaymentAmountInfoResponseDto|null $paymentAmountInfo
     * @param BankInfoResponseDto|null $bankInfo
     * @param int|null $errorCode
     * @param string|null $errorMessage
     */
    public function __construct(
        private string $orderNumber,
        private int $actionCode,
        private string $actionCodeDescription,
        private int $amount,
        private ?int $orderStatus = null,
        private ?int $currency = null,
        private ?string $date = null,
        private ?string $orderDescription = null,
        private ?string $ip = null,
        private array $merchantOrderParams = [],
        private ?CardAuthInfoResponseDto $cardAuthInfo = null,
        private ?BindingInfoResponseDto $bindingInfo = null,
        private ?PaymentAmountInfoResponseDto $paymentAmountInfo = null,
        private ?BankInfoResponseDto $bankInfo = null,
        ?int $errorCode = null,
        ?string $errorMessage = null
    ) {
        parent::__construct($errorCode, $errorMessage);
    }

    public function getOrderNumber(): string
    {
        return $this->orderNumber;
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

    public function getOrderStatus(): ?int
    {
        return $this->orderStatus;
    }

    public function getCurrency(): ?int
    {
        return $this->currency;
    }

    public function getDate(): ?string
    {
        return $this->date;
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

    public function getCardAuthInfo(): ?CardAuthInfoResponseDto
    {
        return $this->cardAuthInfo;
    }

    public function getBindingInfo(): ?BindingInfoResponseDto
    {
        return $this->bindingInfo;
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
