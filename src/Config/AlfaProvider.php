<?php

namespace Sun\EpayAlfa\Config;

class AlfaProvider
{
    public function __construct(
        private string $username,
        private string $password,
        private string $gateway,
        private string $notificationType,
    ) {
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getGateway(): string
    {
        return $this->gateway;
    }

    public function getNotificationType(): string
    {
        return $this->notificationType;
    }
}
