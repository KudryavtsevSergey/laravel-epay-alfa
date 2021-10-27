<?php

namespace Sun\EpayAlfa\Dto\ResponseDto\OrderStatusExtended;

class SecureAuthInfoResponseDto
{
    private ?int $eci;
    private ?string $cavv;
    private ?string $xid;

    public function __construct(?int $eci = null, ?string $cavv = null, ?string $xid = null)
    {
        $this->eci = $eci;
        $this->cavv = $cavv;
        $this->xid = $xid;
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
