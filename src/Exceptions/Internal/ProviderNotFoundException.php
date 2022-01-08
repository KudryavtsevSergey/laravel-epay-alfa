<?php

namespace Sun\EpayAlfa\Exceptions\Internal;

use Sun\EpayAlfa\Exceptions\InternalError;

class ProviderNotFoundException extends InternalError
{
    public function __construct(string $provider)
    {
        parent::__construct(sprintf('Provider config %s not found.', $provider));
    }
}
