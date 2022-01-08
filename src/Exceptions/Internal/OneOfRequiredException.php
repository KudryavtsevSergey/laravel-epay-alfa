<?php

namespace Sun\EpayAlfa\Exceptions\Internal;

use Sun\EpayAlfa\Exceptions\InternalError;

class OneOfRequiredException extends InternalError
{
    public function __construct(string ...$params)
    {
        $message = sprintf('One of %s is required', implode(', ', $params));
        parent::__construct($message);
    }
}
