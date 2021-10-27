<?php

namespace Sun\EpayAlfa\Dto\RequestDto;

class PaymentOrderBindingRequestDto extends AbstractRequestDto
{
    private string $mdOrder;
    private string $bindingId;
    private string $ip;
    private ?string $cvc;
    private ?string $email;

    public function __construct(
        string $mdOrder,
        string $bindingId,
        string $ip,
        ?string $cvc = null,
        ?string $email = null,
        ?string $language = null
    ) {
        parent::__construct($language);
        $this->mdOrder = $mdOrder;
        $this->bindingId = $bindingId;
        $this->ip = $ip;
        $this->cvc = $cvc;
        $this->email = $email;
    }

    public function getMdOrder(): string
    {
        return $this->mdOrder;
    }

    public function getBindingId(): string
    {
        return $this->bindingId;
    }

    public function getIp(): string
    {
        return $this->ip;
    }

    public function getCvc(): ?string
    {
        return $this->cvc;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }
}
