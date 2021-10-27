<?php

namespace Sun\EpayAlfa\Dto\ResponseDto;

use Sun\EpayAlfa\Dto\ResponseDto\ListOrderStatus\ListOrderStatusResponseDto;

class LastOrdersForMerchantsResponseDto extends AbstractErrorResponseDto
{
    /**
     * @var ListOrderStatusResponseDto[]
     */
    private array $orderStatuses;
    private int $totalCount;
    private int $page;
    private int $pageSize;

    /**
     * @param ListOrderStatusResponseDto[] $orderStatuses
     * @param int $totalCount
     * @param int $page
     * @param int $pageSize
     * @param int $errorCode
     * @param string|null $errorMessage
     */
    public function __construct(
        array $orderStatuses,
        int $totalCount,
        int $page,
        int $pageSize,
        int $errorCode,
        ?string $errorMessage = null
    ) {
        parent::__construct($errorCode, $errorMessage);
        $this->orderStatuses = $orderStatuses;
        $this->totalCount = $totalCount;
        $this->page = $page;
        $this->pageSize = $pageSize;
    }

    /**
     * @return ListOrderStatusResponseDto[]
     */
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
