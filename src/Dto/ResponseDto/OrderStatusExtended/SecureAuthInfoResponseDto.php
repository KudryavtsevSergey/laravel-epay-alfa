<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\ResponseDto\OrderStatusExtended;

class SecureAuthInfoResponseDto
{
    public function __construct(
        private ?int $eci = null,
        private ?string $cavv = null,
        private ?string $xid = null,
    ) {
    }

    public function getEci(): ?int
    {
        return $this->eci;
    }

    public function getCavv(): ?string
    {
        return $this->cavv;
    }

    public function getXid(): ?string
    {
        return $this->xid;
    }
}
