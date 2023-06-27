<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\ResponseDto;

use Sun\EpayAlfa\Enum\OperationEnum;
use Sun\EpayAlfa\Enum\OperationStatusEnum;
use Sun\EpayAlfa\Service\ChecksumVerifier\ChecksumInterface;

class OrderPaymentDto implements ResponseDtoInterface, ChecksumInterface
{
    public function __construct(
        private int $amount,
        private string $mdOrder,
        private string $orderNumber,
        private ?string $checksum,
        private string $operation,
        private int $status,
    ) {
        OperationEnum::checkAllowedValue($operation);
        OperationStatusEnum::checkAllowedValue($status);
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

    public function getChecksum(): ?string
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

    public function generatePayload(): string
    {
        return sprintf(
            'mdOrder;%s;operation;%s;orderNumber;%s;status;%s;',
            $this->mdOrder,
            $this->operation,
            $this->orderNumber,
            $this->status
        );
    }
}
