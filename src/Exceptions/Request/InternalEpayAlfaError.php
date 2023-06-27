<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Exceptions\Request;

use Throwable;

class InternalEpayAlfaError extends AbstractResponsableException
{
    public function __construct(Throwable $previous)
    {
        parent::__construct('Internal Error', $previous);
    }
}
