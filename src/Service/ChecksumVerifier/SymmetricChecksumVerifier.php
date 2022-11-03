<?php

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

class SymmetricChecksumVerifier implements ChecksumVerifier
{
    public function __construct(
        private string $secret,
    ) {
    }

    public function verify(ChecksumInterface $checksum): bool
    {
        $expected = hash_hmac('sha256', $checksum->generatePayload(), $this->secret);
        return strcasecmp($expected, $checksum->getChecksum()) === 0;
    }
}
