<?php

namespace Sun\EpayAlfa\Requests;

class RefundRequest extends AbstractAlfaRequest
{
    public function rules(): array
    {
        return [
            'orderId' => 'required',
            'amount' => 'required',
        ];
    }
}
