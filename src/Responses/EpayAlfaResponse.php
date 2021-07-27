<?php

namespace Sun\EpayAlfa\Responses;

use Illuminate\Contracts\Support\Responsable;
use Sun\BelAssist\ResponseGenerators\AbstractResponseGenerator;
use Symfony\Component\HttpFoundation\Response;

class EpayAlfaResponse implements Responsable
{
    public function toResponse($request): Response
    {
        return response();
    }
}
