<?php

namespace Sun\EpayAlfa\Exceptions\Internal;

use RuntimeException;

class FieldCannotBeNullException extends RuntimeException
{
    public function __construct(string $provider, string $field)
    {
        parent::__construct(sprintf('The field %s is required in provider %s.', $field, $provider));
    }
}
