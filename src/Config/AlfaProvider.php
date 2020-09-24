<?php

namespace Sun\EpayAlfa\Config;

class AlfaProvider
{
    private ?string $username;
    private ?string $password;
    private ?string $gateway;

    public function __construct(?string $username, ?string $password, ?string $gateway)
    {
        $this->username = $username;
        $this->password = $password;
        $this->gateway = $gateway;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;
        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function getGateway(): ?string
    {
        return $this->gateway;
    }

    public function setGateway(?string $gateway): self
    {
        $this->gateway = $gateway;
        return $this;
    }
}
