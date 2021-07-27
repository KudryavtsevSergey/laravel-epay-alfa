<?php

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

class CallbackRequest
{
    private ?string $mdOrder;
    private ?string $orderNumber;
    private ?string $checksum;
    private ?string $operation;
    private ?string $status;

    public function __construct(
        ?string $mdOrder,
        ?string $orderNumber,
        ?string $checksum,
        ?string $operation,
        ?string $status
    ) {
        $this->mdOrder = $mdOrder;
        $this->orderNumber = $orderNumber;
        $this->checksum = $checksum;
        $this->operation = $operation;
        $this->status = $status;
    }

    public function getMdOrder(): ?string
    {
        return $this->mdOrder;
    }

    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    public function getChecksum(): ?string
    {
        return $this->checksum;
    }

    public function getOperation(): ?string
    {
        return $this->operation;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }
}
