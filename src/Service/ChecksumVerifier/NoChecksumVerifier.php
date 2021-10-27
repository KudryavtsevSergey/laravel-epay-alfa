<?php

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

class NoChecksumVerifier implements ChecksumVerifier
{
    public function verify(?string $checksum = null): bool
    {
        return $checksum === null;
    }
}
