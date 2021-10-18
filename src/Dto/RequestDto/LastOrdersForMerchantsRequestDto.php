<?php

namespace Sun\EpayAlfa\Dto\RequestDto;

use DateTime;

class LastOrdersForMerchantsRequestDto extends AbstractRequestDto
{
    private int $page = 0;
    private int $size = 200;
    private DateTime $from;
    private DateTime $to;
    private array $transactionStates;
    private string $merchants = '';
    private bool $searchByCreatedDate = false;

    public function __construct(DateTime $from, DateTime $to, array $transactionStates)
    {
        $this->from = $from;
        $this->to = $to;
        $this->transactionStates = $transactionStates;
    }

    public function getPage(): int
    {
        return $this->page;
    }

    public function setPage(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->size = $size;
        return $this;
    }

    public function getFrom(): DateTime
    {
        return $this->from;
    }

    public function setFrom(DateTime $from): self
    {
        $this->from = $from;
        return $this;
    }

    public function getTo(): DateTime
    {
        return $this->to;
    }

    public function setTo(DateTime $to): self
    {
        $this->to = $to;
        return $this;
    }

    public function getTransactionStates(): array
    {
        return $this->transactionStates;
    }

    public function setTransactionStates(array $transactionStates): self
    {
        $this->transactionStates = $transactionStates;
        return $this;
    }

    public function getMerchants(): string
    {
        return $this->merchants;
    }

    public function setMerchants(string $merchants): self
    {
        $this->merchants = $merchants;
        return $this;
    }

    public function isSearchByCreatedDate(): bool
    {
        return $this->searchByCreatedDate;
    }

    public function setSearchByCreatedDate(bool $searchByCreatedDate): self
    {
        $this->searchByCreatedDate = $searchByCreatedDate;
        return $this;
    }

    public function toArray()
    {
        return [
            'transactionStates' => implode(',', $this->transactionStates),
            'merchants' => $this->merchants,
            'page' => $this->page,
            'searchByCreatedDate' => $this->searchByCreatedDate,
        ];
    }
}
