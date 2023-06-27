<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\ResponseDto;

use Sun\EpayAlfa\Dto\ResponseDto\ListOrderStatus\ListOrderStatusResponseDto;

class LastOrdersForMerchantsResponseDto extends AbstractErrorResponseDto
{
    /**
     * @param ListOrderStatusResponseDto[] $orderStatuses
     * @param int $totalCount
     * @param int $page
     * @param int $pageSize
     * @param int $errorCode
     * @param string|null $errorMessage
     */
    public function __construct(
        private array $orderStatuses,
        private int $totalCount,
        private int $page,
        private int $pageSize,
        int $errorCode,
        ?string $errorMessage = null,
    ) {
        parent::__construct($errorCode, $errorMessage);
    }

    public function getOrderStatuses(): array
    {
        return $this->orderStatuses;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getPage(): int
    {
        return $this->page;
    }

    public function getPageSize(): int
    {
        return $this->pageSize;
    }
}
