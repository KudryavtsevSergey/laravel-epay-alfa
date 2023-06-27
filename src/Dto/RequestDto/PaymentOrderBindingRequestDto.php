<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\RequestDto;

class PaymentOrderBindingRequestDto extends AbstractRequestDto
{
    public function __construct(
        private string $mdOrder,
        private string $bindingId,
        private string $ip,
        private ?string $cvc = null,
        private ?string $email = null,
        ?string $language = null,
    ) {
        parent::__construct($language);
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
