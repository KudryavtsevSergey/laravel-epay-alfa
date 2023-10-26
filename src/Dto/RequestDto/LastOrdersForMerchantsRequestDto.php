<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\RequestDto;

use DateTimeInterface;
use Sun\EpayAlfa\Enum\TransactionStateEnum;

class LastOrdersForMerchantsRequestDto extends AbstractRequestDto
{
    public function __construct(
        private readonly DateTimeInterface $from,
        private readonly DateTimeInterface $to,
        private readonly array $transactionStates,
        private readonly int $page = 0,
        private readonly int $size = 200,
        private readonly string $merchants = '',
        private readonly bool $searchByCreatedDate = false,
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
