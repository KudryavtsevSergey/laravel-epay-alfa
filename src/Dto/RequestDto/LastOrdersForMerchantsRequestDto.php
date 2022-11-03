<?php

namespace Sun\EpayAlfa\Dto\RequestDto;

use DateTimeInterface;
use Sun\EpayAlfa\Enum\TransactionStateEnum;

class LastOrdersForMerchantsRequestDto extends AbstractRequestDto
{
    public function __construct(
        private DateTimeInterface $from,
        private DateTimeInterface $to,
        private array $transactionStates,
        private int $page = 0,
        private int $size = 200,
        private string $merchants = '',
        private bool $searchByCreatedDate = false,
        ?string $language = null,
    ) {
        array_walk($transactionStates, function (string $transactionState): void {
            TransactionStateEnum::checkAllowedValue($transactionState);
        });
        parent::__construct($language);
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
