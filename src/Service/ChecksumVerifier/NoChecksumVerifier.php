<?php

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

class NoChecksumVerifier implements ChecksumVerifier
{
    public function verify(ChecksumInterface $checksum): bool
    {
        return $checksum->getChecksum() === null;
    }
}
