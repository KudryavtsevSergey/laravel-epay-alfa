<?php

namespace Sun\EpayAlfa;

use Illuminate\Contracts\Support\Arrayable;
use Sun\EpayAlfa\Config\EpayAlfaConfig;
use Sun\EpayAlfa\Models\DepositModel;
use Sun\EpayAlfa\Models\LastOrdersForMerchantsModel;
use Sun\EpayAlfa\Models\OrderStatusExtendedModel;
use Sun\EpayAlfa\Models\OrderStatusModel;
use Sun\EpayAlfa\Models\PaymentOrderBindingModel;
use Sun\EpayAlfa\Models\RefundModel;
use Sun\EpayAlfa\Models\RegisterModel;
use Sun\EpayAlfa\Models\ReverseModel;
use Sun\EpayAlfa\Requests\DepositRequest;
use Sun\EpayAlfa\Requests\GetOrderStatusExtendedRequest;
use Sun\EpayAlfa\Requests\GetOrderStatusRequest;
use Sun\EpayAlfa\Requests\LastOrdersForMerchantsRequest;
use Sun\EpayAlfa\Requests\PaymentOrderBindingRequest;
use Sun\EpayAlfa\Requests\RefundRequest;
use Sun\EpayAlfa\Requests\RegisterRequest;
use Sun\EpayAlfa\Requests\ReverseRequest;

class EpayAlfa
{
    private EpayAlfaHttpClient $httpClient;
    private EpayAlfaConfig $config;
    private ?string $provider = null;

    public function __construct(EpayAlfaHttpClient $httpClient, EpayAlfaConfig $config)
    {
        $this->httpClient = $httpClient;
        $this->config = $config;
    }

    public function getProvider(): ?string
    {
        return $this->provider;
    }

    public function setProvider(?string $provider): self
    {
        $this->provider = $provider;
        return $this;
    }

    public function provider(?string $provider = null): self
    {
        return $this->setProvider($provider);
    }

    public function registerDo(RegisterRequest $request): RegisterModel
    {
        $response = $this->sendRequest('register.do', $request);
        return RegisterModel::createFromArray($response);
    }

    public function getOrderStatus(GetOrderStatusRequest $request): OrderStatusModel
    {
        $response = $this->sendRequest('getOrderStatus.do', $request);
        return OrderStatusModel::createFromArray($response);
    }

    public function getOrderStatusExtended(GetOrderStatusExtendedRequest $request): OrderStatusExtendedModel
    {
        $response = $this->sendRequest('getOrderStatusExtended.do', $request);
        return OrderStatusExtendedModel::createFromArray($response);
    }

    public function registerPreAuth(RegisterRequest $request): RegisterModel
    {
        $response = $this->sendRequest('registerPreAuth.do', $request);
        return RegisterModel::createFromArray($response);
    }

    public function refund(RefundRequest $request): RefundModel
    {
        $response = $this->sendRequest('refund.do', $request);
        return RefundModel::createFromArray($response);
    }

    public function reverse(ReverseRequest $request): ReverseModel
    {
        $response = $this->sendRequest('reverse.do', $request);
        return ReverseModel::createFromArray($response);
    }

    public function paymentOrderBindingDo(PaymentOrderBindingRequest $request): PaymentOrderBindingModel
    {
        $response = $this->sendRequest('paymentOrderBinding.do', $request);
        return PaymentOrderBindingModel::createFromArray($response);
    }

    public function depositDo(DepositRequest $request): DepositModel
    {
        $response = $this->sendRequest('deposit.do', $request);
        return DepositModel::createFromArray($response);
    }

    public function getLastOrdersForMerchants(LastOrdersForMerchantsRequest $request): LastOrdersForMerchantsModel
    {
        $response = $this->sendRequest('getLastOrdersForMerchants.do', $request);
        return LastOrdersForMerchantsModel::createFromArray($response);
    }

    private function sendRequest(string $method, Arrayable $data): array
    {
        $alfaProvider = $this->config->getAlfaProvider($this->provider);
        return $this->httpClient->request($alfaProvider, $method, $data->toArray());
    }
}
