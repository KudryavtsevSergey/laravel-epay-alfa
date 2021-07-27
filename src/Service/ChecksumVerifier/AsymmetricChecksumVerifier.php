<?php

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

use phpseclib3\Crypt\RSA;
use phpseclib3\Crypt\RSA\PublicKey;
use phpseclib3\File\X509;

class AsymmetricChecksumVerifier extends AbstractChecksumVerifier
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


        $x509 = new X509();
        $certificate = $x509->loadX509($this->secret);

        echo $certificate->verify($hash, base64_decode($signature, true)) ? 'valid' : 'invalid';


        $x509 = new X509();
        $certificate = $x509->loadX509($this->secret);

        echo $x509->validateSignature() ? 'valid' : 'invalid';

        $certFactory = CertificateFactory::getInstance("X.509");
        $in = new ByteArrayInputStream($certificate);
        $x509Cert = $certFactory->generateCertificate($in);
        $sig = Signature::getInstance("SHA512withRSA");
        $sig->initVerify($x509Cert->getPublicKey());
        $sig->update($signString->getBytes());
        $verifies = $sig->verify(Hex::decodeHex($checksum->toLowerCase()->toCharArray()));


        ///


        return hash_hmac('sha256', $data, $this->secret);
    }
}
