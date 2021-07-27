<?php

namespace Sun\EpayAlfa\Exceptions\Request;

class WrongEpayAlfaChecksumException extends AbstractResponsableException
{
    public function __construct(string $checksum)
    {
        $message = sprintf('Wrong checksum: %s', $checksum);
        parent::__construct($message);
    }
}
