<?php

namespace Sun\EpayAlfa\Exceptions\Internal;

use RuntimeException;

class ProviderNotFoundException extends RuntimeException
{
    public function __construct(string $provider)
    {
        parent::__construct(sprintf('Provider config %s not found.', $provider));
    }
}
