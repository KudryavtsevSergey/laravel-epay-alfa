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
     * @param string|null $language
     */
    public function __construct(
        ?string $orderNumber,
        ?string $orderId  = null,
        ?string $language = null
    ) {
        if (empty($orderNumber) && empty($orderId)) {
            throw new OneOfRequiredException('orderNumber', 'orderId');
        }
        parent::__construct($language);
        $this->orderNumber = $orderNumber;
        $this->orderId = $orderId;
    }

    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }
}
