<?php

namespace Sun\EpayAlfa\Config;

class AlfaProvider
{
    private string $username;
    private string $password;
    private string $gateway;
    private string $notificationType;
    private ?string $secret;

    public function __construct(
        string $username,
        string $password,
        string $gateway,
        string $notificationType,
        ?string $secret
    ) {
        $this->username = $username;
        $this->password = $password;
        $this->gateway = $gateway;
        $this->notificationType = $notificationType;
        $this->secret = $secret;
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

    public function getSecret(): ?string
    {
        return $this->secret;
    }
}
