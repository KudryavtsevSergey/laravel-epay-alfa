<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\ResponseDto\OrderStatusExtended;

class SecureAuthInfoResponseDto
{
    public function __construct(
        private readonly ?int $eci = null,
        private readonly ?string $cavv = null,
        private readonly ?string $xid = null,
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
