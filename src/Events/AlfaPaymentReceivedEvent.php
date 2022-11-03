<?php

namespace Sun\EpayAlfa\Events;

use Sun\EpayAlfa\Service\ChecksumVerifier\ChecksumInterface;

class AlfaPaymentReceivedEvent
{
    public function __construct(
        private string $provider,
        private ChecksumInterface $orderPaymentDto,
    ) {
    }

    public function getProvider(): string
    {
        return $this->provider;
    }

    public function getOrderPaymentDto(): ChecksumInterface
    {
        return $this->orderPaymentDto;
    }
}
