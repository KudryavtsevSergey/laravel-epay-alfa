<?php

namespace Sun\EpayAlfa\Dto\ResponseDto\ListOrderStatus;

use Sun\EpayAlfa\Dto\ResponseDto\AbstractErrorResponseDto;

class ListOrderStatusResponseDto extends AbstractErrorResponseDto
{
    private string $orderNumber;
    private int $orderStatus;
    private int $actionCode;
    private string $actionCodeDescription;
    private int $amount;
    private int $currency;
    private string $date;
    private string $orderDescription;
    private string $ip;
    /**
     * @var MerchantOrderParamResponseDto[]
     */
    private array $merchantOrderParams;
    /**
     * @var AttributeResponseDto[]
     */
    private array $attributes;
    private CardAuthInfoResponseDto $cardAuthInfo;
    private BindingInfoResponseDto $bindingInfo;
    private string $authDateTime;
    private string $terminalId;
    private string $authRefNum;
    private PaymentAmountInfoResponseDto $paymentAmountInfo;
    private BankInfoResponseDto $bankInfo;
}
