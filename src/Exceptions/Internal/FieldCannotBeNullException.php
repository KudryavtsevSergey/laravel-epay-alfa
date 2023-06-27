<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Exceptions\Internal;

use Sun\EpayAlfa\Exceptions\InternalError;

class FieldCannotBeNullException extends InternalError
{
    public function __construct(string $field)
    {
        parent::__construct(sprintf('The field %s is required', $field));
    }
}
