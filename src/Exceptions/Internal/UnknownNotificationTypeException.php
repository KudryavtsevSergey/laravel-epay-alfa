<?php

namespace Sun\EpayAlfa\Exceptions\Internal;

use RuntimeException;

class UnknownNotificationTypeException extends RuntimeException
{
    public function __construct(string $notificationType)
    {
        parent::__construct(sprintf('Unknown notification type %s', $notificationType));
    }
}
