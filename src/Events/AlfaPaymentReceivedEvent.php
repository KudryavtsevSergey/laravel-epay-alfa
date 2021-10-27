<?php

namespace Sun\EpayAlfa\Events;

class AlfaPaymentReceivedEvent
{
    private string $provider;
    private $orderPaymentDto;

    public function __construct(string $provider, $orderPaymentDto)
    {
        $this->provider = $provider;
        $this->orderPaymentDto = $orderPaymentDto;
    }

    public function getProvider(): string
    {
        return $this->provider;
    }

    public function getOrderPaymentDto()
    {
        return $this->orderPaymentDto;
    }
}
