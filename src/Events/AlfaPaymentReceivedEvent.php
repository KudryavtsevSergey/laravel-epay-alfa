<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Events;

use Sun\EpayAlfa\Service\ChecksumVerifier\ChecksumInterface;

class AlfaPaymentReceivedEvent
{
    public function __construct(
        private readonly string $provider,
        private readonly ChecksumInterface $orderPaymentDto,
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
