<?php

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

interface ChecksumVerifier
{
    public function verify(ChecksumInterface $checksum): bool;
}
