<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

interface ChecksumVerifierInterface
{
    public function verify(ChecksumInterface $checksum): bool;
}
