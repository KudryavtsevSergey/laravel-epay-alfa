<?php

namespace Sun\EpayAlfa\Dto\ResponseDto;

class PaymentOrderBindingResponseDto extends AbstractErrorResponseDto
{
    private ?string $redirect;
    private ?string $info;
    private ?string $error;
    private ?string $processingErrorType;
    private ?string $acsUrl;
    private ?string $paReq;
    private ?string $termUrl;

    public function __construct(
        int $errorCode,
        ?string $errorMessage = null,
        ?string $redirect = null,
        ?string $info = null,
        ?string $error = null,
        ?string $processingErrorType = null,
        ?string $acsUrl = null,
        ?string $paReq = null,
        ?string $termUrl = null
    ) {
        parent::__construct($errorCode, $errorMessage);
        $this->redirect = $redirect;
        $this->info = $info;
        $this->error = $error;
        $this->processingErrorType = $processingErrorType;
        $this->acsUrl = $acsUrl;
        $this->paReq = $paReq;
        $this->termUrl = $termUrl;
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
