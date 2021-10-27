<?php

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

use Lcobucci\JWT\Signer\Key;
use Lcobucci\JWT\Signer\Key\InMemory;
use Lcobucci\JWT\Signer\Rsa\Sha256;
use League\OAuth2\Server\CryptKey;

class AsymmetricChecksumVerifier implements ChecksumVerifier
{
    private Sha256 $signer;
    private Key $privateKey;
    private Key $publicKey;

    public function __construct(CryptKey $privateKey, CryptKey $publicKey)
    {
        $this->signer = new Sha256();
        $this->privateKey = InMemory::plainText($privateKey->getKeyContents(), $privateKey->getPassPhrase() ?? '');
        $this->publicKey = InMemory::plainText($publicKey->getKeyContents(), $publicKey->getPassPhrase() ?? '');
    }

    public function verify(ChecksumInterface $checksum): bool
    {
        return $this->signer->verify($checksum->getChecksum(), $checksum->generatePayload(), $this->publicKey);
    }
}
