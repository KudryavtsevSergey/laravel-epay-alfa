<?php

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

use Lcobucci\JWT\Signer\Key;
use Lcobucci\JWT\Signer\Key\InMemory;
use Lcobucci\JWT\Signer\Rsa\Sha256;
use League\OAuth2\Server\CryptKey;

class AsymmetricChecksumVerifier implements ChecksumVerifier
{
    private ChecksumInterface $checksum;
    private Sha256 $signer;
    private Key $privateKey;
    private Key $publicKey;

    public function __construct(ChecksumInterface $checksum, CryptKey $privateKey, CryptKey $publicKey)
    {
        $this->checksum = $checksum;
        $this->signer = new Sha256();
        $this->privateKey = InMemory::plainText($privateKey->getKeyContents(), $privateKey->getPassPhrase() ?? '');
        $this->publicKey = InMemory::plainText($publicKey->getKeyContents(), $publicKey->getPassPhrase() ?? '');
    }

    public function verify(?string $checksum = null): bool
    {
        $data = sprintf(
            'mdOrder;%s;operation;%s;orderNumber;%s;status;%s;',
            $this->checksum->getMdOrder(),
            $this->checksum->getOperation(),
            $this->checksum->getOrderNumber(),
            $this->checksum->getStatus()
        );

        return $this->signer->verify($checksum, $data, $this->publicKey);
    }
}
