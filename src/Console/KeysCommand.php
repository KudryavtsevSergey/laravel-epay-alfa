<?php

namespace Sun\EpayAlfa\Console;

use Illuminate\Console\Command;
use phpseclib3\Crypt\RSA;
use Sun\EpayAlfa\EpayAlfa;

class KeysCommand extends Command
{
    protected $signature = 'alfa:keys
                                      {--force : Overwrite keys they already exist}
                                      {--length=4096 : The length of the private key}';

    protected $description = 'Create the encryption keys for epay alfa signature verification';

    public function handle(): void
    {
        [$publicKey, $privateKey] = [
            EpayAlfa::publicKeyPath(),
            EpayAlfa::privateKeyPath(),
        ];

        if ((file_exists($publicKey) || file_exists($privateKey)) && !$this->option('force')) {
            $this->error('Encryption keys already exist. Use the --force option to overwrite them.');
        } else {
            $key = RSA::createKey($this->input ? (int) $this->option('length') : 4096);
            file_put_contents($publicKey, (string)$key->getPublicKey());
            file_put_contents($privateKey, (string)$key);

            $this->info('Encryption keys generated successfully.');
        }
    }
}
