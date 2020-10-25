<?php

namespace Sun\EpayAlfa\Models;

class PaymentOrderBindingModel extends AbstractErrorModel
{
    private ?string $redirect = null;
    private ?string $info = null;
    private ?string $error = null;
    private ?string $processingErrorType = null;
    private ?string $acsUrl = null;
    private ?string $paReq = null;
    private ?string $termUrl = null;

    public function getRedirect(): ?string
    {
        return $this->redirect;
    }

    public function setRedirect(?string $redirect): self
    {
        $this->redirect = $redirect;
        return $this;
    }

    public function getInfo(): ?string
    {
        return $this->info;
    }

    public function setInfo(?string $info): self
    {
        $this->info = $info;
        return $this;
    }

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(?string $error): self
    {
        $this->error = $error;
        return $this;
    }

    public function getProcessingErrorType(): ?string
    {
        return $this->processingErrorType;
    }

    public function setProcessingErrorType(?string $processingErrorType): self
    {
        $this->processingErrorType = $processingErrorType;
        return $this;
    }

    public function getAcsUrl(): ?string
    {
        return $this->acsUrl;
    }

    public function setAcsUrl(?string $acsUrl): self
    {
        $this->acsUrl = $acsUrl;
        return $this;
    }

    public function getPaReq(): ?string
    {
        return $this->paReq;
    }

    public function setPaReq(?string $paReq): self
    {
        $this->paReq = $paReq;
        return $this;
    }

    public function getTermUrl(): ?string
    {
        return $this->termUrl;
    }

    public function setTermUrl(?string $termUrl): self
    {
        $this->termUrl = $termUrl;
        return $this;
    }

    protected function fillFromData(array $data)
    {
        $this->setRedirect($data['redirect'] ?? null)
            ->setInfo($data['info'] ?? null)
            ->setError($data['error'] ?? null)
            ->setProcessingErrorType($data['processingErrorType'] ?? null)
            ->setAcsUrl($data['acsUrl'] ?? null)
            ->setPaReq($data['paReq'] ?? null)
            ->setTermUrl($data['termUrl'] ?? null);
    }
}
