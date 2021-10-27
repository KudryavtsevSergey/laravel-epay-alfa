<?php

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

class SymmetricChecksumVerifier implements ChecksumVerifier
{
    private ChecksumInterface $checksum;
    private string $secret;

    public function __construct(ChecksumInterface $checksum, string $secret)
    {
        $this->checksum = $checksum;
        $this->secret = $secret;
    }

    public function verify(?string $checksum = null): bool
    {
        return strcasecmp($this->calculateCheckSum(), $checksum) === 0;
    }

    private function calculateCheckSum(): ?string
    {
        $data = sprintf(
            'mdOrder;%s;operation;%s;orderNumber;%s;status;%s;',
            $this->checksum->getMdOrder(),
            $this->checksum->getOperation(),
            $this->checksum->getOrderNumber(),
            $this->checksum->getStatus()
        );

        return hash_hmac('sha256', $data, $this->secret);
    }
}
