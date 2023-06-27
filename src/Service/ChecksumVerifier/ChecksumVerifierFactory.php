<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

use Sun\EpayAlfa\Config\AlfaProvider;
use Sun\EpayAlfa\Enum\CheckTypeEnum;

class ChecksumVerifierFactory
{
    public function create(AlfaProvider $alfaProvider): ChecksumVerifierInterface
    {
        return match ($alfaProvider->getCheckType()) {
            CheckTypeEnum::NO_CHECKSUM => new NoChecksumVerifier(),
            CheckTypeEnum::SYMMETRIC_CHECKSUM => new SymmetricChecksumVerifier($alfaProvider->getSecret()),
            CheckTypeEnum::ASYMMETRIC_CHECKSUM => new AsymmetricChecksumVerifier($alfaProvider->makeCryptKey()),
            default => throw CheckTypeEnum::invalidValue($alfaProvider->getCheckType()),
        };
    }
}
