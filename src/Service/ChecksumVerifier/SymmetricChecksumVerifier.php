<?php

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

class SymmetricChecksumVerifier extends AbstractChecksumVerifier
{
    private CallbackRequest $request;
    private string $secret;

    public function __construct(CallbackRequest $request, string $secret)
    {
        $this->request = $request;
        $this->secret = $secret;
    }

    protected function calculateCheckSum(): ?string
    {
        $data = sprintf(
            'mdOrder;%s;operation;%s;orderNumber;%s;status;%s;',
            $this->request->getMdOrder(),
            $this->request->getOperation(),
            $this->request->getOrderNumber(),
            $this->request->getStatus()
        );

        return hash_hmac('sha256', $data, $this->secret);
    }
}
