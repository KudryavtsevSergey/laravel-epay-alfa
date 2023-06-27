<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Exceptions\Request;

use Illuminate\Contracts\Support\Responsable;
use Sun\EpayAlfa\Exceptions\InternalError;
use Sun\EpayAlfa\Responses\EpayAlfaResponse;
use Symfony\Component\HttpFoundation\Response;

abstract class AbstractResponsableException extends InternalError implements Responsable
{
    public function toResponse($request): Response
    {
        return (new EpayAlfaResponse())->toResponse($request);
    }
}
