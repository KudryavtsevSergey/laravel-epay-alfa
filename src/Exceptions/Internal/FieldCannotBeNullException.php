<?php

namespace Sun\EpayAlfa\Exceptions\Internal;

use Sun\EpayAlfa\Exceptions\InternalError;

class FieldCannotBeNullException extends InternalError
{
    public function __construct(string $provider, string $field)
    {
        parent::__construct(sprintf('The field %s is required for provider %s.', $field, $provider));
    }
}
