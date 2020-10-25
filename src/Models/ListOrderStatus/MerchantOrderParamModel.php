<?php

namespace Sun\EpayAlfa\Models\ListOrderStatus;

use Sun\EpayAlfa\Models\AbstractModel;

class MerchantOrderParamModel extends AbstractModel
{
    private ?string $name = null;
    private ?string $value = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

    protected function fillFromData(array $data)
    {
        $this
            ->setName($data['name'] ?? null)
            ->setValue($data['value'] ?? null);
    }
}
