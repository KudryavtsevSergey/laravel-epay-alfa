<?php

namespace Sun\EpayAlfa\Dto\RequestDto;

abstract class AbstractRequestDto implements RequestDtoInterface
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
