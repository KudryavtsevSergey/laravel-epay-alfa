<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

use Sun\EpayAlfa\Exceptions\Request\WrongEpayAlfaChecksumException;

class SymmetricChecksumVerifier implements ChecksumVerifierInterface
{
    public function __construct(
        private readonly ?string $secret,
    ) {
    }

    public function verify(ChecksumInterface $checksum): bool
    {
        $expected = hash_hmac(
            'sha256',
            $checksum->generatePayload(),
            $this->secret ?? throw new WrongEpayAlfaChecksumException()
        );
        return strcasecmp(
            $expected,
            $checksum->getChecksum() ?? throw new WrongEpayAlfaChecksumException()
        ) === 0;
    }
}
