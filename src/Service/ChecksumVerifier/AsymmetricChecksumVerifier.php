<?php

declare(strict_types=1);

namespace Sun\EpayAlfa\Service\ChecksumVerifier;

use Lcobucci\JWT\Signer\Key;
use Lcobucci\JWT\Signer\Key\InMemory;
use Lcobucci\JWT\Signer\Rsa\Sha256;
use League\OAuth2\Server\CryptKey;
use Sun\EpayAlfa\Exceptions\Request\WrongEpayAlfaChecksumException;

class AsymmetricChecksumVerifier implements ChecksumVerifierInterface
{
    private const EMPTY = 'empty';

    private Sha256 $signer;
    private Key $key;

    public function __construct(?CryptKey $publicKey)
    {
        $this->signer = new Sha256();
        $this->key = InMemory::plainText(
            $publicKey?->getKeyContents() ?: self::EMPTY,
            $publicKey?->getPassPhrase() ?? ''
        );
    }

    public function verify(ChecksumInterface $checksum): bool
    {
        return $this->signer->verify(
            $checksum->getChecksum() ?: throw new WrongEpayAlfaChecksumException(),
            $checksum->generatePayload(),
            $this->key
        );
    }
}
