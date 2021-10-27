<?php

namespace Sun\EpayAlfa\Dto\ResponseDto;

use Sun\EpayAlfa\Dto\ResponseDto\ListOrderStatus\MerchantOrderParamResponseDto;
use Sun\EpayAlfa\Dto\ResponseDto\OrderStatusExtended\BankInfoResponseDto;
use Sun\EpayAlfa\Dto\ResponseDto\OrderStatusExtended\BindingInfoResponseDto;
use Sun\EpayAlfa\Dto\ResponseDto\OrderStatusExtended\CardAuthInfoResponseDto;
use Sun\EpayAlfa\Dto\ResponseDto\OrderStatusExtended\PaymentAmountInfoResponseDto;

class OrderStatusExtendedResponseDto extends AbstractErrorResponseDto
{
    private string $orderNumber;
    private int $actionCode;
    private string $actionCodeDescription;
    private int $amount;
    private ?int $orderStatus;
    private ?int $currency;
    private ?string $date;
    private ?string $orderDescription;
    private ?string $ip;
    /**
     * @var MerchantOrderParamResponseDto[]
     */
    private array $merchantOrderParams;
    private ?CardAuthInfoResponseDto $cardAuthInfo;
    private ?BindingInfoResponseDto $bindingInfo;
    private ?PaymentAmountInfoResponseDto $paymentAmountInfo;
    private ?BankInfoResponseDto $bankInfo;

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
        string $orderNumber,
        int $actionCode,
        string $actionCodeDescription,
        int $amount,
        ?int $orderStatus = null,
        ?int $currency = null,
        ?string $date = null,
        ?string $orderDescription = null,
        ?string $ip = null,
        array $merchantOrderParams = [],
        ?CardAuthInfoResponseDto $cardAuthInfo = null,
        ?BindingInfoResponseDto $bindingInfo = null,
        ?PaymentAmountInfoResponseDto $paymentAmountInfo = null,
        ?BankInfoResponseDto $bankInfo = null,
        ?int $errorCode = null,
        ?string $errorMessage = null
    ) {
        parent::__construct($errorCode, $errorMessage);
        $this->orderNumber = $orderNumber;
        $this->actionCode = $actionCode;
        $this->actionCodeDescription = $actionCodeDescription;
        $this->amount = $amount;
        $this->orderStatus = $orderStatus;
        $this->currency = $currency;
        $this->date = $date;
        $this->orderDescription = $orderDescription;
        $this->ip = $ip;
        $this->merchantOrderParams = $merchantOrderParams;
        $this->cardAuthInfo = $cardAuthInfo;
        $this->bindingInfo = $bindingInfo;
        $this->paymentAmountInfo = $paymentAmountInfo;
        $this->bankInfo = $bankInfo;
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
