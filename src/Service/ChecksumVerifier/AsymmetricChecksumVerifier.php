<?php

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

use Lcobucci\JWT\Signer\Key;
use Lcobucci\JWT\Signer\Key\InMemory;
use Lcobucci\JWT\Signer\Rsa\Sha256;
use League\OAuth2\Server\CryptKey;

class AsymmetricChecksumVerifier implements ChecksumVerifier
{
    private const EMPTY = 'empty';

    private Sha256 $signer;
    private Key $privateKey;
    private Key $publicKey;

    public function __construct(?CryptKey $privateKey, ?CryptKey $publicKey)
    {
        $this->signer = new Sha256();
        $this->privateKey = InMemory::plainText(
            $privateKey?->getKeyContents() ?? self::EMPTY,
            $privateKey?->getPassPhrase() ?? ''
        );
        $this->publicKey = InMemory::plainText(
            $publicKey?->getKeyContents() ?? self::EMPTY,
            $publicKey->getPassPhrase() ?? ''
        );
    }

    public function verify(ChecksumInterface $checksum): bool
    {
        return $this->signer->verify($checksum->getChecksum(), $checksum->generatePayload(), $this->publicKey);
    }
}
