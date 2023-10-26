<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Dto\RequestDto;

use Sun\EpayAlfa\Enum\LanguageEnum;

abstract class AbstractRequestDto implements RequestDtoInterface
{
    public function __construct(
        private readonly ?string $language = null,
    ) {
        LanguageEnum::checkAllowedValue($language, true);
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }
}
