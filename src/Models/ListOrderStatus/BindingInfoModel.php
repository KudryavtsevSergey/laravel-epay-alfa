<?php

namespace Sun\EpayAlfa\Models\ListOrderStatus;

use Sun\EpayAlfa\Models\AbstractModel;

class BindingInfoModel extends AbstractModel
{
    private ?string $clientId = null;
    private ?string $bindingId = null;

    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    public function setClientId(?string $clientId): self
    {
        $this->clientId = $clientId;
        return $this;
    }

    public function getBindingId(): ?string
    {
        return $this->bindingId;
    }

    public function setBindingId(?string $bindingId): self
    {
        $this->bindingId = $bindingId;
        return $this;
    }

    protected function fillFromData(array $data)
    {
        $this->setClientId($data['clientId'] ?? null)
            ->setBindingId($data['bindingId'] ?? null);
    }
}
