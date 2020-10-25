<?php

namespace Sun\EpayAlfa\Models;

abstract class AbstractErrorModel extends AbstractModel
{
    private ?int $errorCode = null;
    private ?string $errorMessage = null;

    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }

    public function setErrorCode(?int $errorCode): self
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    public function setErrorMessage(?string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    public static function createFromArray(array $data): self
    {
        $model = parent::createFromArray($data);
        $model->fillError($data);
        return $model;
    }

    private function fillError(array $data)
    {
        $this->setErrorCode($data['errorCode'] ?? null);
        $this->setErrorMessage($data['errorMessage'] ?? null);
    }
}
