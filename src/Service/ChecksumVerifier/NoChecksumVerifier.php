<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

class NoChecksumVerifier implements ChecksumVerifierInterface
{
    public function verify(ChecksumInterface $checksum): bool
    {
        return $checksum->getChecksum() === null;
    }
}
