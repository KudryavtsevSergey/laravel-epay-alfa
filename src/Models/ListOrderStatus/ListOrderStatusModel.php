<?php

namespace Sun\EpayAlfa\Models\ListOrderStatus;

use Sun\EpayAlfa\Models\AbstractErrorModel;

class ListOrderStatusModel extends AbstractErrorModel
{
    private ?string $orderNumber = null;
    private ?int $orderStatus = null;
    private ?int $actionCode = null;
    private ?string $actionCodeDescription = null;
    private ?int $amount = null;
    private ?int $currency = null;
    private ?string $date = null;
    private ?string $orderDescription = null;
    private ?string $ip = null;

    /**
     * @var MerchantOrderParamModel[]
     */
    private array $merchantOrderParams = [];

    /**
     * @var AttributeModel[]
     */
    private array $attributes = [];
    private ?CardAuthInfoModel $cardAuthInfo = null;
    private ?BindingInfoModel $bindingInfo = null;
    private ?string $authDateTime = null;
    private ?string $terminalId = null;
    private ?string $authRefNum = null;
    private ?PaymentAmountInfoModel $paymentAmountInfo = null;
    private ?BankInfoModel $bankInfo = null;

    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(?string $orderNumber): self
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    public function getOrderStatus(): ?int
    {
        return $this->orderStatus;
    }

    public function setOrderStatus(?int $orderStatus): self
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    public function getActionCode(): ?int
    {
        return $this->actionCode;
    }

    public function setActionCode(?int $actionCode): self
    {
        $this->actionCode = $actionCode;
        return $this;
    }

    public function getActionCodeDescription(): ?string
    {
        return $this->actionCodeDescription;
    }

    public function setActionCodeDescription(?string $actionCodeDescription): self
    {
        $this->actionCodeDescription = $actionCodeDescription;
        return $this;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    public function getCurrency(): ?int
    {
        return $this->currency;
    }

    public function setCurrency(?int $currency): self
    {
        $this->currency = $currency;
        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(?string $date): self
    {
        $this->date = $date;
        return $this;
    }

    public function getOrderDescription(): ?string
    {
        return $this->orderDescription;
    }

    public function setOrderDescription(?string $orderDescription): self
    {
        $this->orderDescription = $orderDescription;
        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(?string $ip): self
    {
        $this->ip = $ip;
        return $this;
    }

    public function getMerchantOrderParams(): array
    {
        return $this->merchantOrderParams;
    }

    public function setMerchantOrderParams(array $merchantOrderParams): self
    {
        $this->merchantOrderParams = $merchantOrderParams;
        return $this;
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function setAttributes(array $attributes): self
    {
        $this->attributes = $attributes;
        return $this;
    }

    public function getCardAuthInfo(): ?CardAuthInfoModel
    {
        return $this->cardAuthInfo;
    }

    public function setCardAuthInfo(?CardAuthInfoModel $cardAuthInfo): self
    {
        $this->cardAuthInfo = $cardAuthInfo;
        return $this;
    }

    public function getBindingInfo(): ?BindingInfoModel
    {
        return $this->bindingInfo;
    }

    public function setBindingInfo(?BindingInfoModel $bindingInfo): self
    {
        $this->bindingInfo = $bindingInfo;
        return $this;
    }

    public function getAuthDateTime(): ?string
    {
        return $this->authDateTime;
    }

    public function setAuthDateTime(?string $authDateTime): self
    {
        $this->authDateTime = $authDateTime;
        return $this;
    }

    public function getTerminalId(): ?string
    {
        return $this->terminalId;
    }

    public function setTerminalId(?string $terminalId): self
    {
        $this->terminalId = $terminalId;
        return $this;
    }

    public function getAuthRefNum(): ?string
    {
        return $this->authRefNum;
    }

    public function setAuthRefNum(?string $authRefNum): self
    {
        $this->authRefNum = $authRefNum;
        return $this;
    }

    public function getPaymentAmountInfo(): ?PaymentAmountInfoModel
    {
        return $this->paymentAmountInfo;
    }

    public function setPaymentAmountInfo(?PaymentAmountInfoModel $paymentAmountInfo): self
    {
        $this->paymentAmountInfo = $paymentAmountInfo;
        return $this;
    }

    public function getBankInfo(): ?BankInfoModel
    {
        return $this->bankInfo;
    }

    public function setBankInfo(?BankInfoModel $bankInfo): self
    {
        $this->bankInfo = $bankInfo;
        return $this;
    }

    protected function fillFromData(array $data)
    {
        $merchantOrderParams = array_map(function ($merchantOrderParam): MerchantOrderParamModel {
            return MerchantOrderParamModel::createFromArray((array)$merchantOrderParam);
        }, $data['merchantOrderParams'] ?? []);

        $attributes = array_map(function ($attribute): AttributeModel {
            return AttributeModel::createFromArray((array)$attribute);
        }, $data['attributes'] ?? []);

        $this->setOrderNumber($data['orderNumber'] ?? null)
            ->setOrderStatus($data['orderStatus'] ?? null)
            ->setActionCode($data['actionCode'] ?? null)
            ->setActionCodeDescription($data['actionCodeDescription'] ?? null)
            ->setAmount($data['amount'] ?? null)
            ->setCurrency($data['currency'] ?? null)
            ->setDate($data['date'] ?? null)
            ->setOrderDescription($data['orderDescription'] ?? null)
            ->setIp($data['ip'] ?? null)
            ->setMerchantOrderParams($merchantOrderParams)
            ->setAttributes($attributes)
            ->setCardAuthInfo(CardAuthInfoModel::createFromArray((array)($data['cardAuthInfo'] ?? [])))
            ->setBindingInfo(BindingInfoModel::createFromArray((array)($data['bindingInfo'] ?? [])))
            ->setAuthDateTime($data['authDateTime'] ?? null)
            ->setTerminalId($data['terminalId'] ?? null)
            ->setAuthRefNum($data['authRefNum'] ?? null)
            ->setPaymentAmountInfo(PaymentAmountInfoModel::createFromArray((array)($data['paymentAmountInfo'] ?? [])))
            ->setBankInfo(BankInfoModel::createFromArray((array)($data['bankInfo'] ?? [])));
    }
}
