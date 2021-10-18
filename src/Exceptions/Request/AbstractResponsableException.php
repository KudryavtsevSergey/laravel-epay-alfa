<?php

namespace Sun\EpayAlfa\Exceptions\Request;

use Sun\EpayAlfa\Exceptions\InternalError;
use Sun\EpayAlfa\Responses\EpayAlfaResponse;

abstract class AbstractResponsableException extends InternalError implements ResponsableThrowable
{
    public function toResponse($request): EpayAlfaResponse
    {
        return new EpayAlfaResponse();
    }
}
