<?php

namespace Sun\EpayAlfa\Dto\RequestDto;

use DateTimeInterface;
use Sun\EpayAlfa\Enum\TransactionStateEnum;

class LastOrdersForMerchantsRequestDto extends AbstractRequestDto
{
    private DateTimeInterface $from;
    private DateTimeInterface $to;
    private array $transactionStates;
    private int $page;
    private int $size;
    private string $merchants;
    private bool $searchByCreatedDate;

    public function __construct(
        DateTimeInterface $from,
        DateTimeInterface $to,
        array $transactionStates,
        int $page = 0,
        int $size = 200,
        string $merchants = '',
        bool $searchByCreatedDate = false,
        ?string $language = null
    ) {
        array_map(function (string $transactionState): void {
            TransactionStateEnum::checkAllowedValue($transactionState);
        }, $transactionStates);
        parent::__construct($language);
        $this->from = $from;
        $this->to = $to;
        $this->transactionStates = $transactionStates;
        $this->page = $page;
        $this->size = $size;
        $this->merchants = $merchants;
        $this->searchByCreatedDate = $searchByCreatedDate;
    }

    public function getFrom(): DateTimeInterface
    {
        return $this->from;
    }

    public function getTo(): DateTimeInterface
    {
        return $this->to;
    }

    public function getTransactionStates(): array
    {
        return $this->transactionStates;
    }

    public function getPage(): int
    {
        return $this->page;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getMerchants(): string
    {
        return $this->merchants;
    }

    public function isSearchByCreatedDate(): bool
    {
        return $this->searchByCreatedDate;
    }
}
