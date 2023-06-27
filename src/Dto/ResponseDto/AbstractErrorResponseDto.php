<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\ResponseDto;

abstract class AbstractErrorResponseDto implements ResponseDtoInterface
{
    public function __construct(
        private ?int $errorCode = null,
        private ?string $errorMessage = null,
    ) {
    }

    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }

    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }
}
