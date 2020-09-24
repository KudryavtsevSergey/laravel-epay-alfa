<?php

namespace Sun\EpayAlfa\Requests;

class PaymentOrderBindingDoRequest extends AbstractAlfaRequest
{
    public function rules(): array
    {
        return [
            'mdOrder' => 'required',
            'bindingId' => 'required',
            'ip' => 'required'
        ];
    }
}
