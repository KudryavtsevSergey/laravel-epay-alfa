<?php

namespace Sun\EpayAlfa\Http\Controllers;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Http\Request;
use Sun\EpayAlfa\Dto\ResponseDto\OrderPaymentDto;
use Sun\EpayAlfa\Events\AlfaPaymentReceivedEvent;
use Sun\EpayAlfa\Mapper\ArrayObjectMapper;
use Sun\EpayAlfa\Responses\EpayAlfaResponse;

class EpayAlfaController extends AbstractController
{
    private ArrayObjectMapper $arrayObjectMapper;
    private Dispatcher $dispatcher;

    public function __construct(
        ArrayObjectMapper $arrayObjectMapper,
        Dispatcher $dispatcher
    ) {
        $this->arrayObjectMapper = $arrayObjectMapper;
        $this->dispatcher = $dispatcher;
    }

    public function callback(string $provider, Request $request): EpayAlfaResponse
    {
        /** @var OrderPaymentDto $payment */
        $payment = $this->arrayObjectMapper->deserialize($request->all(), OrderPaymentDto::class);
        $this->dispatcher->dispatch(new AlfaPaymentReceivedEvent($provider, $payment));
        return new EpayAlfaResponse();
    }
}
