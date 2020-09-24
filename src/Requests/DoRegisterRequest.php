<?php

namespace Sun\EpayAlfa\Requests;

class DoRegisterRequest extends AbstractAlfaRequest
{
    public function rules(): array
    {
        return [
            'orderNumber' => 'required',
            'amount' => 'required',
            'returnUrl' => 'required'
        ];
    }
}
