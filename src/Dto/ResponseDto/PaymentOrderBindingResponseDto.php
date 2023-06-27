<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\ResponseDto;

class PaymentOrderBindingResponseDto extends AbstractErrorResponseDto
{
    public function __construct(
        int $errorCode,
        ?string $errorMessage = null,
        private ?string $redirect = null,
        private ?string $info = null,
        private ?string $error = null,
        private ?string $processingErrorType = null,
        private ?string $acsUrl = null,
        private ?string $paReq = null,
        private ?string $termUrl = null,
    ) {
        parent::__construct($errorCode, $errorMessage);
    }

    public function getRedirect(): ?string
    {
        return $this->redirect;
    }

    public function getInfo(): ?string
    {
        return $this->info;
    }

    public function getError(): ?string
    {
        return $this->error;
    }

    public function getProcessingErrorType(): ?string
    {
        return $this->processingErrorType;
    }

    public function getAcsUrl(): ?string
    {
        return $this->acsUrl;
    }

    public function getPaReq(): ?string
    {
        return $this->paReq;
    }

    public function getTermUrl(): ?string
    {
        return $this->termUrl;
    }
}
