<?php

namespace Sun\EpayAlfa\Models;

class RegisterModel extends AbstractErrorModel
{
    private ?string $orderId = null;
    private ?string $formUrl = null;

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function setOrderId(?string $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    public function getFormUrl(): ?string
    {
        return $this->formUrl;
    }

    public function setFormUrl(?string $formUrl): self
    {
        $this->formUrl = $formUrl;
        return $this;
    }

    protected function fillFromData(array $data)
    {
        $this->setOrderId($data['orderId'] ?? null)
            ->setFormUrl($data['formUrl'] ?? null);
    }
}
