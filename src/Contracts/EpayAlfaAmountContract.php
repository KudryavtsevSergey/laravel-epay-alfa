<?php

namespace Sun\EpayAlfa\Contracts;

interface EpayAlfaAmountContract
{
    public function getAmount(): float;

    public function getEpayAlfaCurrency(): int;
}
