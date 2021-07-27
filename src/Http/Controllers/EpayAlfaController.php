<?php

namespace Sun\EpayAlfa\Http\Controllers;

use Illuminate\Http\Request;
use Sun\EpayAlfa\Responses\EpayAlfaResponse;

class EpayAlfaController extends AbstractController
{
    public function callback(string $provider, Request $request): EpayAlfaResponse
    {
        $payment = BelAssistPaymentModel::createFromArray($request->all());
        event(new BelAssistPaymentReceivedEvent($payment));

        return new EpayAlfaResponse();
    }
}
