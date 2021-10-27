<?php

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

interface ChecksumInterface
{
    public function getMdOrder(): string;

    public function getOrderNumber(): string;

    public function getOperation(): string;

    public function getStatus(): int;
}
