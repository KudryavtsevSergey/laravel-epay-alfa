<?php

namespace Sun\EpayAlfa\Console;

use Illuminate\Console\Command;
use phpseclib3\Crypt\RSA;
use Sun\EpayAlfa\Enum\AlfaProviderEnum;
use Sun\EpayAlfa\EpayAlfa;

class KeysCommand extends Command
{
    protected $signature = 'alfa:keys
                                      {--provider=ru: The provider for keys, options: ru, by}
                                      {--force : Overwrite keys they already exist}
                                      {--length=4096 : The length of the private key}';

    protected $description = 'Create the encryption keys for epay alfa signature verification';

    public function handle(): void
    {
        $provider = $this->option('provider');
        AlfaProviderEnum::checkAllowedValue($provider);

        [$publicKey, $privateKey] = [
            EpayAlfa::publicKeyPath($provider),
            EpayAlfa::privateKeyPath($provider),
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
