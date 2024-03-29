<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\ResponseDto;

class RegisterResponseDto extends AbstractErrorResponseDto
{
    public function __construct(
        private readonly ?string $orderId = null,
        private readonly ?string $formUrl = null,
        ?int $errorCode = null,
        ?string $errorMessage = null,
    ) {
        parent::__construct($errorCode, $errorMessage);
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
