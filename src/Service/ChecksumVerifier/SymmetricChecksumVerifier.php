<?php

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

class SymmetricChecksumVerifier implements ChecksumVerifier
{
    private string $secret;

    public function __construct(string $secret)
    {
        $this->secret = $secret;
    }

    public function verify(ChecksumInterface $checksum): bool
    {
        $expected = hash_hmac('sha256', $checksum->generatePayload(), $this->secret);
        return strcasecmp($expected, $checksum->getChecksum()) === 0;
    }
}
