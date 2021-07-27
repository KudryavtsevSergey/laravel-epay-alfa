<?php

namespace Sun\EpayAlfa\Exceptions\Request;

use Sun\BelAssist\Enum\BelAsssitFirstResponseCodeEnum;
use Sun\BelAssist\Enum\BelAssistSecondResponseCodeEnum;
use Throwable;

class InternalEpayAlfaError extends AbstractResponsableException
{
    public function __construct(Throwable $previous)
    {
        parent::__construct('Internal Error', 0, $previous);
    }
}
