<?php

namespace Sun\EpayAlfa\Commands;

use DateInterval;
use DateTime;
use Illuminate\Console\Command;
use Sun\EpayAlfa\Config\EpayAlfaConfig;
use Sun\EpayAlfa\Enum\TransactionStateEnum;
use Sun\EpayAlfa\EpayAlfa;
use Sun\EpayAlfa\Requests\LastOrdersForMerchantsRequest;

class CheckPaymentCommand extends Command
{
    /**
     * @var string
     */
    protected $signature = 'alfa:check-payment
       {--time= : The time}';

    /**
     * @var string
     */
    protected $description = 'Check Alfa Payment Command';

    private EpayAlfaConfig $config;
    private EpayAlfa $epayAlfa;

    public function __construct(EpayAlfaConfig $config, EpayAlfa $epayAlfa)
    {
        parent::__construct();
        $this->config = $config;
        $this->epayAlfa = $epayAlfa;
    }

    public function handle()
    {
        $from = new DateTime();
        // TODO: get time from option $this->option('time')
        $from->sub(new DateInterval('PT15M'));
        $to = new DateTime();
        $request = new LastOrdersForMerchantsRequest($from, $to, [
            TransactionStateEnum::DEPOSITED,
        ]);
        $providerKeys = $this->config->getProviderKeys();
        foreach ($providerKeys as $providerKey) {
            $orders = $this->epayAlfa->provider($providerKey)
                ->getLastOrdersForMerchants($request);
            // TODO: dispatch orders
        }

        $this->info(sprintf('Alfa payment checked for %s providers', implode(', ', $providerKeys)));
    }
}
