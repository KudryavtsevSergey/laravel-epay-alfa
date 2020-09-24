<?php

namespace Sun\EpayAlfa;

use Sun\EpayAlfa\Config\EpayAlfaConfig;
use Sun\EpayAlfa\Requests\DoRegisterRequest;
use Sun\EpayAlfa\Requests\GetOrderStatusRequest;
use Sun\EpayAlfa\Requests\PaymentOrderBindingDoRequest;
use Sun\EpayAlfa\Requests\RefundRequest;

class EpayAlfa
{
    private ?string $provider;
    private EpayAlfaHttpClient $httpClient;
    private EpayAlfaConfig $config;

    private function __construct(EpayAlfaHttpClient $httpClient, EpayAlfaConfig $config)
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

    public function registerDo(DoRegisterRequest $request): array
    {
        return $this->sendRequest('register.do', $request->validated());
    }

    public function getOrderStatus(GetOrderStatusRequest $request): array
    {
        return $this->sendRequest('getOrderStatus.do', $request->validated());
    }

    public function getOrderStatusExtended(GetOrderStatusRequest $request): array
    {
        return $this->sendRequest('getOrderStatusExtended.do', $request->validated());
    }

    public function registerPreAuth(DoRegisterRequest $request): array
    {
        return $this->sendRequest('registerPreAuth.do', $request->validated());
    }

    public function refund(RefundRequest $request): array
    {
        return $this->sendRequest('refund.do', $request->validated());
    }

    public function reverse(GetOrderStatusRequest $request): array
    {
        return $this->sendRequest('reverse.do', $request->validated());
    }

    public function paymentOrderBindingDo(PaymentOrderBindingDoRequest $request): array
    {
        return $this->sendRequest('paymentOrderBinding.do', $request->validated());
    }

    public function depositDo(RefundRequest $request): array
    {
        return $this->sendRequest('deposit.do', $request->validated());
    }

    private function sendRequest(string $method, array $data): array
    {
        $alfaProvider = $this->config->getAlfaProvider($this->provider);
        return $this->httpClient->request($alfaProvider, $method, $data);
    }
}
