<?php

namespace Sun\EpayAlfa\Exceptions\Internal;

use RuntimeException;

class OneOfRequiredException extends RuntimeException
{
    public function __construct(string ...$params)
    {
        $message = sprintf('One of %s is required', implode(', ', $params));
        parent::__construct($message);
    }
}
