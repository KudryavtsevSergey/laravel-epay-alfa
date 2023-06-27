<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

interface ChecksumInterface
{
    /**
     * @return non-empty-string
     */
    public function generatePayload(): string;

    public function getChecksum(): ?string;
}
