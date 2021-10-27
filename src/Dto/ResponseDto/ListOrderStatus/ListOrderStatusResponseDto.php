<?php

namespace Sun\EpayAlfa\Dto\ResponseDto\ListOrderStatus;

class ListOrderStatusResponseDto
{
    private string $orderNumber;
    private int $orderStatus;
    private int $actionCode;
    private string $actionCodeDescription;
    private int $amount;
    private int $currency;
    private string $date;
    private int $errorCode;
    private ?string $orderDescription;
    private ?string $ip;
    /**
     * @var MerchantOrderParamResponseDto[]
     */
    private array $merchantOrderParams;
    /**
     * @var AttributeResponseDto[]
     */
    private array $attributes;
    private ?CardAuthInfoResponseDto $cardAuthInfo;
    private ?BindingInfoResponseDto $bindingInfo;
    private ?string $authDateTime;
    private ?string $terminalId;
    private ?string $authRefNum;
    private ?PaymentAmountInfoResponseDto $paymentAmountInfo;
    private ?BankInfoResponseDto $bankInfo;

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
        string $orderNumber,
        int $orderStatus,
        int $actionCode,
        string $actionCodeDescription,
        int $amount,
        int $currency,
        string $date,
        int $errorCode,
        ?string $orderDescription = null,
        ?string $ip = null,
        array $merchantOrderParams = [],
        array $attributes = [],
        ?CardAuthInfoResponseDto $cardAuthInfo = null,
        ?BindingInfoResponseDto $bindingInfo = null,
        ?string $authDateTime = null,
        ?string $terminalId = null,
        ?string $authRefNum = null,
        ?PaymentAmountInfoResponseDto $paymentAmountInfo = null,
        ?BankInfoResponseDto $bankInfo = null
    ) {
        $this->orderNumber = $orderNumber;
        $this->orderStatus = $orderStatus;
        $this->actionCode = $actionCode;
        $this->actionCodeDescription = $actionCodeDescription;
        $this->amount = $amount;
        $this->currency = $currency;
        $this->date = $date;
        $this->errorCode = $errorCode;
        $this->orderDescription = $orderDescription;
        $this->ip = $ip;
        $this->merchantOrderParams = $merchantOrderParams;
        $this->attributes = $attributes;
        $this->cardAuthInfo = $cardAuthInfo;
        $this->bindingInfo = $bindingInfo;
        $this->authDateTime = $authDateTime;
        $this->terminalId = $terminalId;
        $this->authRefNum = $authRefNum;
        $this->paymentAmountInfo = $paymentAmountInfo;
        $this->bankInfo = $bankInfo;
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
