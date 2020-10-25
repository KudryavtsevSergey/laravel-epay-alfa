<?php

namespace Sun\EpayAlfa\Requests;

use Illuminate\Contracts\Support\Arrayable;

abstract class AbstractRequest implements Arrayable
{
    private ?string $language = null;

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;
        return $this;
    }
}
