<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Service;

use Sun\EpayAlfa\Dto\RequestDto\DepositRequestDto;
use Sun\EpayAlfa\Dto\RequestDto\GetOrderStatusExtendedRequestDto;
use Sun\EpayAlfa\Dto\RequestDto\GetOrderStatusRequestDto;
use Sun\EpayAlfa\Dto\RequestDto\LastOrdersForMerchantsRequestDto;
use Sun\EpayAlfa\Dto\RequestDto\PaymentOrderBindingRequestDto;
use Sun\EpayAlfa\Dto\RequestDto\RefundRequestDto;
use Sun\EpayAlfa\Dto\RequestDto\RegisterRequestDto;
use Sun\EpayAlfa\Dto\RequestDto\ReverseRequestDto;
use Sun\EpayAlfa\Dto\ResponseDto\DepositResponseDto;
use Sun\EpayAlfa\Dto\ResponseDto\LastOrdersForMerchantsResponseDto;
use Sun\EpayAlfa\Dto\ResponseDto\OrderStatusExtendedResponseDto;
use Sun\EpayAlfa\Dto\ResponseDto\OrderStatusResponseDto;
use Sun\EpayAlfa\Dto\ResponseDto\PaymentOrderBindingResponseDto;
use Sun\EpayAlfa\Dto\ResponseDto\RefundResponseDto;
use Sun\EpayAlfa\Dto\ResponseDto\RegisterResponseDto;
use Sun\EpayAlfa\Dto\ResponseDto\ReverseResponseDto;
use Sun\EpayAlfa\Constant\ApiConstant;

class AlfaApiService
{
    public function __construct(
        private AlfaHttpClientService $httpClient,
    ) {
    }

    public function registerDo(RegisterRequestDto $request): RegisterResponseDto
    {
        return $this->httpClient->request(ApiConstant::REGISTER, $request, RegisterResponseDto::class);
    }

    public function getOrderStatus(GetOrderStatusRequestDto $request): OrderStatusResponseDto
    {
        return $this->httpClient->request(ApiConstant::GET_ORDER_STATUS, $request, OrderStatusResponseDto::class);
    }

    public function getOrderStatusExtended(GetOrderStatusExtendedRequestDto $request): OrderStatusExtendedResponseDto
    {
        return $this->httpClient->request(
            ApiConstant::GET_ORDER_STATUS_EXTENDED,
            $request,
            OrderStatusExtendedResponseDto::class
        );
    }

    public function registerPreAuth(RegisterRequestDto $request): RegisterResponseDto
    {
        return $this->httpClient->request(ApiConstant::REGISTER_PRE_AUTH, $request, RegisterResponseDto::class);
    }

    public function refund(RefundRequestDto $request): RefundResponseDto
    {
        return $this->httpClient->request(ApiConstant::REFUND, $request, RefundResponseDto::class);
    }

    public function reverse(ReverseRequestDto $request): ReverseResponseDto
    {
        return $this->httpClient->request(ApiConstant::REVERSE, $request, ReverseResponseDto::class);
    }

    public function paymentOrderBindingDo(PaymentOrderBindingRequestDto $request): PaymentOrderBindingResponseDto
    {
        return $this->httpClient->request(
            ApiConstant::PAYMENT_ORDER_BINDING,
            $request,
            PaymentOrderBindingResponseDto::class
        );
    }

    public function depositDo(DepositRequestDto $request): DepositResponseDto
    {
        return $this->httpClient->request(ApiConstant::DEPOSIT, $request, DepositResponseDto::class);
    }

    public function getLastOrdersForMerchants(
        LastOrdersForMerchantsRequestDto $request
    ): LastOrdersForMerchantsResponseDto {
        return $this->httpClient->request(
            ApiConstant::GET_LAST_ORDERS_FOR_MERCHANTS,
            $request,
            LastOrdersForMerchantsResponseDto::class
        );
    }
}
