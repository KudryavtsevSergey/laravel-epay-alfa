<?php

namespace Sun\EpayAlfa\Dto\ResponseDto;

class RegisterResponseDto extends AbstractErrorResponseDto
{
    private string $orderId;
    private string $formUrl;
}
