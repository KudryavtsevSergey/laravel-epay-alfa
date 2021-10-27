<?php

namespace Sun\EpayAlfa\Dto\ResponseDto;

class RegisterResponseDto extends AbstractErrorResponseDto
{
    private ?string $orderId;
    private ?string $formUrl;

    public function __construct(
        ?string $orderId = null,
        ?string $formUrl = null,
        ?int $errorCode = null,
        ?string $errorMessage = null
    ) {
        parent::__construct($errorCode, $errorMessage);
        $this->orderId = $orderId;
        $this->formUrl = $formUrl;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function getFormUrl(): ?string
    {
        return $this->formUrl;
    }
}
