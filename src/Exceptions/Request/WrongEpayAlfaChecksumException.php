<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Exceptions\Request;

class WrongEpayAlfaChecksumException extends AbstractResponsableException
{
    public function __construct(?string $checksum = null)
    {
        $message = sprintf('Wrong checksum: %s', $checksum);
        parent::__construct($message);
    }
}
