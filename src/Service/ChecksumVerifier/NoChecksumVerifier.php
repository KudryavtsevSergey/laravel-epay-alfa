<?php

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

class NoChecksumVerifier extends AbstractChecksumVerifier
{
    protected function calculateCheckSum(): ?string
    {
        return null;
    }
}
