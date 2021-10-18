<?php

namespace Sun\EpayAlfa\Dto\ResponseDto;

class OrderPaymentDto implements ResponseDtoInterface
{
    private int $amount;
    private string $mdOrder;
    private string $orderNumber;
    private string $checksum;
    private string $operation;
    private int $status;

    public function __construct(
        int $amount,
        string $mdOrder,
        string $orderNumber,
        string $checksum,
        string $operation,
        int $status
    ) {
        $this->amount = $amount;
        $this->mdOrder = $mdOrder;
        $this->orderNumber = $orderNumber;
        $this->checksum = $checksum;
        $this->operation = $operation;
        $this->status = $status;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getMdOrder(): string
    {
        return $this->mdOrder;
    }

    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    public function getChecksum(): string
    {
        return $this->checksum;
    }

    public function getOperation(): string
    {
        return $this->operation;
    }

    public function getStatus(): int
    {
        return $this->status;
    }
}
