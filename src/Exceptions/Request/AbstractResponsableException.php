<?php

namespace Sun\EpayAlfa\Exceptions\Request;

use Exception;
use Illuminate\Contracts\Support\Responsable;
use Sun\BelAssist\ResponseGenerators\FailureResponseGenerator;
use Sun\BelAssist\Responses\BelAssistResponse;
use Sun\EpayAlfa\Responses\EpayAlfaResponse;

abstract class AbstractResponsableException extends Exception implements Responsable
{
    public function toResponse($request)
    {
        return new EpayAlfaResponse();
    }
}
