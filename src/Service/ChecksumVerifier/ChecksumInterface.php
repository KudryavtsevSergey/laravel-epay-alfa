<?php

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

interface ChecksumInterface
{
    public function generatePayload(): string;

    public function getChecksum(): string;
}
