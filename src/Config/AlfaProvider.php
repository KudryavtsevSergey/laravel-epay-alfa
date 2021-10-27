<?php

namespace Sun\EpayAlfa\Config;

class AlfaProvider
{
    private string $username;
    private string $password;
    private string $gateway;
    private string $notificationType;

    public function __construct(
        string $username,
        string $password,
        string $gateway,
        string $notificationType
    ) {
        $this->username = $username;
        $this->password = $password;
        $this->gateway = $gateway;
        $this->notificationType = $notificationType;
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
