<?php

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

abstract class AbstractChecksumVerifier implements ChecksumVerifier
{
    public function verify(?string $checksum = null): bool
    {
        return strcasecmp($this->calculateCheckSum(), $checksum) === 0;
    }

    protected abstract function calculateCheckSum(): ?string;
}
