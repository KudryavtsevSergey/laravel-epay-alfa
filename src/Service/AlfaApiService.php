<?php

namespace Sun\EpayAlfa\Service;

use Sun\EpayAlfa\Dto\RequestDto\DepositRequestDto;
use Sun\EpayAlfa\Dto\RequestDto\GetOrderStatusExtendedRequestDto;
use Sun\EpayAlfa\Dto\RequestDto\GetOrderStatusRequestDto;
use Sun\EpayAlfa\Dto\RequestDto\LastOrdersForMerchantsRequestDto;
use Sun\EpayAlfa\Dto\RequestDto\PaymentOrderBindingRequestDto;
use Sun\EpayAlfa\Dto\RequestDto\RefundRequestDto;
use Sun\EpayAlfa\Dto\RequestDto\RegisterRequestDto;
use Sun\EpayAlfa\Dto\RequestDto\RequestDtoInterface;
use Sun\EpayAlfa\Dto\RequestDto\ReverseRequestDto;
use Sun\EpayAlfa\Dto\ResponseDto\DepositResponseDto;
use Sun\EpayAlfa\Dto\ResponseDto\LastOrdersForMerchantsResponseDto;
use Sun\EpayAlfa\Dto\ResponseDto\OrderStatusExtendedResponseDto;
use Sun\EpayAlfa\Dto\ResponseDto\OrderStatusResponseDto;
use Sun\EpayAlfa\Dto\ResponseDto\PaymentOrderBindingResponseDto;
use Sun\EpayAlfa\Dto\ResponseDto\RefundResponseDto;
use Sun\EpayAlfa\Dto\ResponseDto\RegisterResponseDto;
use Sun\EpayAlfa\Dto\ResponseDto\ResponseDtoInterface;
use Sun\EpayAlfa\Dto\ResponseDto\ReverseResponseDto;
use Sun\EpayAlfa\Enum\ApiEnum;

class AlfaApiService
{
    public function __construct(
        private AlfaHttpClientService $httpClient,
    ) {
    }

    public function registerDo(RegisterRequestDto $request): RegisterResponseDto
    {
        /** @var RegisterResponseDto $registerDto */
        $registerDto = $this->sendRequest(ApiEnum::REGISTER, $request, RegisterResponseDto::class);
        return $registerDto;
    }

    public function getOrderStatus(GetOrderStatusRequestDto $request): OrderStatusResponseDto
    {
        /** @var OrderStatusResponseDto $orderStatusDto */
        $orderStatusDto = $this->sendRequest(ApiEnum::GET_ORDER_STATUS, $request, OrderStatusResponseDto::class);
        return $orderStatusDto;
    }

    public function getOrderStatusExtended(GetOrderStatusExtendedRequestDto $request): OrderStatusExtendedResponseDto
    {
        /** @var OrderStatusExtendedResponseDto $orderStatusExtendedDto */
        $orderStatusExtendedDto = $this->sendRequest(ApiEnum::GET_ORDER_STATUS_EXTENDED, $request, OrderStatusExtendedResponseDto::class);
        return $orderStatusExtendedDto;
    }

    public function registerPreAuth(RegisterRequestDto $request): RegisterResponseDto
    {
        /** @var RegisterResponseDto $registerDto */
        $registerDto = $this->sendRequest(ApiEnum::REGISTER_PRE_AUTH, $request, RegisterResponseDto::class);
        return $registerDto;
    }

    public function refund(RefundRequestDto $request): RefundResponseDto
    {
        /** @var RefundResponseDto $refundDto */
        $refundDto = $this->sendRequest(ApiEnum::REFUND, $request, RefundResponseDto::class);
        return $refundDto;
    }

    public function reverse(ReverseRequestDto $request): ReverseResponseDto
    {
        /** @var ReverseResponseDto $reverseDto */
        $reverseDto = $this->sendRequest(ApiEnum::REVERSE, $request, ReverseResponseDto::class);
        return $reverseDto;
    }

    public function paymentOrderBindingDo(PaymentOrderBindingRequestDto $request): PaymentOrderBindingResponseDto
    {
        /** @var PaymentOrderBindingResponseDto $paymentOrderBindingDto */
        $paymentOrderBindingDto = $this->sendRequest(ApiEnum::PAYMENT_ORDER_BINDING, $request, PaymentOrderBindingResponseDto::class);
        return $paymentOrderBindingDto;
    }

    public function depositDo(DepositRequestDto $request): DepositResponseDto
    {
        /** @var DepositResponseDto $depositDto */
        $depositDto = $this->sendRequest(ApiEnum::DEPOSIT, $request, DepositResponseDto::class);
        return $depositDto;
    }

    public function getLastOrdersForMerchants(
        LastOrdersForMerchantsRequestDto $request
    ): LastOrdersForMerchantsResponseDto {
        /** @var LastOrdersForMerchantsResponseDto $lastOrdersForMerchantsDto */
        $lastOrdersForMerchantsDto = $this->sendRequest(ApiEnum::GET_LAST_ORDERS_FOR_MERCHANTS, $request, LastOrdersForMerchantsResponseDto::class);
        return $lastOrdersForMerchantsDto;
    }

    private function sendRequest(
        string $method,
        RequestDtoInterface $requestDto,
        string $responseType
    ): ResponseDtoInterface {
        return $this->httpClient->request($method, $requestDto, $responseType);
    }
}
