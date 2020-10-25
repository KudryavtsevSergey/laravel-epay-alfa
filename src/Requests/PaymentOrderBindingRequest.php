<?php

namespace Sun\EpayAlfa\Requests;

class PaymentOrderBindingRequest extends AbstractRequest
{
    private string $mdOrder;
    private string $bindingId;
    private string $ip;
    private ?string $cvc = null;
    private ?string $email = null;

    public function __construct(string $mdOrder, string $bindingId, string $ip)
    {
        $this->mdOrder = $mdOrder;
        $this->bindingId = $bindingId;
        $this->ip = $ip;
    }

    public function getMdOrder(): string
    {
        return $this->mdOrder;
    }

    public function setMdOrder(string $mdOrder): self
    {
        $this->mdOrder = $mdOrder;
        return $this;
    }

    public function getBindingId(): string
    {
        return $this->bindingId;
    }

    public function setBindingId(string $bindingId): self
    {
        $this->bindingId = $bindingId;
        return $this;
    }

    public function getIp(): string
    {
        return $this->ip;
    }

    public function setIp(string $ip): self
    {
        $this->ip = $ip;
        return $this;
    }

    public function getCvc(): ?string
    {
        return $this->cvc;
    }

    public function setCvc(?string $cvc): self
    {
        $this->cvc = $cvc;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function toArray()
    {
        return [
            'mdOrder' => $this->mdOrder,
            'bindingId' => $this->bindingId,
            'ip' => $this->ip,
            'cvc' => $this->cvc,
            'email' => $this->email,
        ];
    }
}
