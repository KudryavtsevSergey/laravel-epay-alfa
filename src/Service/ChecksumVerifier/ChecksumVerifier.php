<?php

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

interface ChecksumVerifier
{
    public function verify(?string $checksum = null): bool;
}
