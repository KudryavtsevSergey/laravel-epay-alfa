<?php

namespace Sun\EpayAlfa\Http\Controllers;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Http\Request;
use Sun\EpayAlfa\Config\EpayAlfaConfig;
use Sun\EpayAlfa\Events\AlfaPaymentReceivedEvent;
use Sun\EpayAlfa\Exceptions\Request\AbstractResponsableException;
use Sun\EpayAlfa\Exceptions\Request\InternalEpayAlfaError;
use Sun\EpayAlfa\Exceptions\Request\WrongEpayAlfaChecksumException;
use Sun\EpayAlfa\Mapper\ArrayObjectMapper;
use Sun\EpayAlfa\Responses\EpayAlfaResponse;
use Sun\EpayAlfa\Service\ChecksumVerifier\ChecksumInterface;
use Sun\EpayAlfa\Service\ChecksumVerifier\ChecksumVerifierFactory;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class EpayAlfaController extends AbstractController
{
    public function __construct(
        private ArrayObjectMapper $arrayObjectMapper,
        private Dispatcher $dispatcher,
        private EpayAlfaConfig $config,
        private ChecksumVerifierFactory $checksumVerifierFactory,
    ) {
    }

    public function callback(string $provider, Request $request): Response
    {
        try {
            $checksumImplementation = $this->config->getChecksumImplementation();
            /** @var ChecksumInterface $payment */
            $payment = $this->arrayObjectMapper->deserialize($request->all(), $checksumImplementation);

            $this->verifyPayment($provider, $payment);

            $this->dispatcher->dispatch(new AlfaPaymentReceivedEvent($provider, $payment));

            return (new EpayAlfaResponse())->toResponse($request);
        } catch (AbstractResponsableException $exception) {
            throw $exception;
        } catch (Throwable $exception) {
            throw new InternalEpayAlfaError($exception);
        }
    }

    private function verifyPayment(string $provider, ChecksumInterface $checksum): void
    {
        $notificationType = $this->config->getAlfaProvider($provider)->getNotificationType();
        $checksumVerifier = $this->checksumVerifierFactory->createByNotificationType($notificationType);
        if (!$checksumVerifier->verify($checksum)) {
            throw new WrongEpayAlfaChecksumException($checksum->getChecksum());
        }
    }
}
