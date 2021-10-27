<?php

namespace Sun\EpayAlfa\Dto\RequestDto;

use Sun\EpayAlfa\Enum\LanguageEnum;

abstract class AbstractRequestDto implements RequestDtoInterface
{
    private ?string $language;

    public function __construct(?string $language = null)
    {
        LanguageEnum::checkAllowedValue($language, true);
        $this->language = $language;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }
}
