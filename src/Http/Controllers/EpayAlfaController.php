<?php

namespace Sun\EpayAlfa\Http\Controllers;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Http\Request;
use Sun\EpayAlfa\Config\EpayAlfaConfig;
use Sun\EpayAlfa\Dto\ResponseDto\OrderPaymentDto;
use Sun\EpayAlfa\Events\AlfaPaymentReceivedEvent;
use Sun\EpayAlfa\Exceptions\Request\AbstractResponsableException;
use Sun\EpayAlfa\Exceptions\Request\InternalEpayAlfaError;
use Sun\EpayAlfa\Exceptions\Request\WrongEpayAlfaChecksumException;
use Sun\EpayAlfa\Mapper\ArrayObjectMapper;
use Sun\EpayAlfa\Responses\EpayAlfaResponse;
use Sun\EpayAlfa\Service\ChecksumVerifier\ChecksumVerifierFactory;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class EpayAlfaController extends AbstractController
{
    private ArrayObjectMapper $arrayObjectMapper;
    private Dispatcher $dispatcher;
    private EpayAlfaConfig $config;
    private ChecksumVerifierFactory $checksumVerifierFactory;

    public function __construct(
        ArrayObjectMapper $arrayObjectMapper,
        Dispatcher $dispatcher,
        EpayAlfaConfig $config,
        ChecksumVerifierFactory $checksumVerifierFactory
    ) {
        $this->arrayObjectMapper = $arrayObjectMapper;
        $this->dispatcher = $dispatcher;
        $this->config = $config;
        $this->checksumVerifierFactory = $checksumVerifierFactory;
    }

    public function callback(string $provider, Request $request): Response
    {
        try {
            /** @var OrderPaymentDto $payment */
            $payment = $this->arrayObjectMapper->deserialize($request->all(), OrderPaymentDto::class);

            $this->verifyPayment($provider, $payment);

            $this->dispatcher->dispatch(new AlfaPaymentReceivedEvent($provider, $payment));

            return (new EpayAlfaResponse())->toResponse($request);
        } catch (AbstractResponsableException $exception) {
            throw $exception;
        } catch (Throwable $exception) {
            throw new InternalEpayAlfaError($exception);
        }
    }

    private function verifyPayment(string $provider, OrderPaymentDto $payment): void
    {
        $alfaProvider = $this->config->getAlfaProvider($provider);
        $checksumVerifier = $this->checksumVerifierFactory->createByNotificationType(
            $alfaProvider->getNotificationType(),
            $payment
        );
        if (!$checksumVerifier->verify($payment->getChecksum())) {
            throw new WrongEpayAlfaChecksumException($payment->getChecksum());
        }
    }
}
