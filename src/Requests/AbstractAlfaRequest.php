<?php

namespace Sun\EpayAlfa\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class AbstractAlfaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public abstract function rules(): array;
}
