<?php

namespace Sun\EpayAlfa\Events;

use Sun\EpayAlfa\Dto\ResponseDto\OrderPaymentDto;

class AlfaPaymentReceivedEvent
{
    private string $provider;
    private OrderPaymentDto $orderPaymentDto;

    public function __construct(string $provider, OrderPaymentDto $orderPaymentDto)
    {
        $this->provider = $provider;
        $this->orderPaymentDto = $orderPaymentDto;
    }

    public function getProvider(): string
    {
        return $this->provider;
    }

    public function getOrderPaymentDto(): OrderPaymentDto
    {
        return $this->orderPaymentDto;
    }
}
