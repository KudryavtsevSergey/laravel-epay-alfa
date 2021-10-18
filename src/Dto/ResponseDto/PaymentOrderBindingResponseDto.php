<?php

namespace Sun\EpayAlfa\Dto\ResponseDto;

class PaymentOrderBindingResponseDto extends AbstractErrorResponseDto
{
    private string $redirect;
    private string $info;
    private string $error;
    private string $processingErrorType;
    private string $acsUrl;
    private string $paReq;
    private string $termUrl;
}
