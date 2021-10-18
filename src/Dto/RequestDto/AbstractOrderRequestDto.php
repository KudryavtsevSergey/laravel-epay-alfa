<?php

namespace Sun\EpayAlfa\Dto\RequestDto;

use Sun\EpayAlfa\Exceptions\Internal\OneOfRequiredException;

abstract class AbstractOrderRequestDto extends AbstractRequestDto
{
    private ?string $orderNumber;
    private ?string $orderId;

    /**
     * @param string|null $orderNumber Number of the order in the system
     * @param string|null $orderId Order number in the payment system
     */
    public function __construct(?string $orderNumber, ?string $orderId  = null)
    {
        if (empty($orderNumber) && empty($orderId)) {
            throw new OneOfRequiredException('orderNumber', 'orderId');
        }

        $this->orderNumber = $orderNumber;
        $this->orderId = $orderId;
    }

    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(?string $orderNumber): self
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function setOrderId(?string $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }
}
