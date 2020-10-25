<?php

namespace Sun\EpayAlfa\Models;

use Sun\EpayAlfa\Models\ListOrderStatus\ListOrderStatusModel;

class LastOrdersForMerchantsModel extends AbstractErrorModel
{
    /**
     * @var ListOrderStatusModel[]
     */
    private array $orderStatuses = [];
    private ?int $totalCount = null;
    private ?int $page = null;
    private ?int $pageSize = null;

    public function getOrderStatuses(): array
    {
        return $this->orderStatuses;
    }

    public function setOrderStatuses(array $orderStatuses): self
    {
        $this->orderStatuses = $orderStatuses;
        return $this;
    }

    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    public function setTotalCount(?int $totalCount): self
    {
        $this->totalCount = $totalCount;
        return $this;
    }

    public function getPage(): ?int
    {
        return $this->page;
    }

    public function setPage(?int $page): self
    {
        $this->page = $page;
        return $this;
    }

    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    public function setPageSize(?int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    protected function fillFromData(array $data)
    {
        $orderStatuses = array_map(function ($orderStatus): ListOrderStatusModel {
            return ListOrderStatusModel::createFromArray((array)$orderStatus);
        }, $data['orderStatuses'] ?? []);

        $this->setOrderStatuses($orderStatuses)
            ->setTotalCount($data['totalCount'] ?? null)
            ->setPage($data['page'] ?? null)
            ->setPageSize($data['pageSize'] ?? null);
    }
}
