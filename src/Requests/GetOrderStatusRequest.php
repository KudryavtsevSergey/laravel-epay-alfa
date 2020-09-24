<?php

namespace Sun\EpayAlfa\Requests;

class GetOrderStatusRequest extends AbstractAlfaRequest
{
    public function rules(): array
    {
        return [
            'orderId' => 'required',
        ];
    }
}
