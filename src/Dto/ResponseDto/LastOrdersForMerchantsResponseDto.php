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
}
