<?php

declare(strict_types=1);

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
        private readonly string $orderNumber,
        private readonly int $actionCode,
        private readonly string $actionCodeDescription,
        private readonly int $amount,
        private readonly ?int $orderStatus = null,
        private readonly ?int $currency = null,
        private readonly ?string $date = null,
        private readonly ?string $orderDescription = null,
        private readonly ?string $ip = null,
        private readonly array $merchantOrderParams = [],
        private readonly ?CardAuthInfoResponseDto $cardAuthInfo = null,
        private readonly ?BindingInfoResponseDto $bindingInfo = null,
        private readonly ?PaymentAmountInfoResponseDto $paymentAmountInfo = null,
        private readonly ?BankInfoResponseDto $bankInfo = null,
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
