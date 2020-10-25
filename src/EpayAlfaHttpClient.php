<?php

namespace Sun\EpayAlfa;

use Http;
use Sun\EpayAlfa\Config\AlfaProvider;

class EpayAlfaHttpClient
{
    public function request(AlfaProvider $alfaProvider, string $method, array $data): array
    {
        $data = array_merge($data, [
            'userName' => $alfaProvider->getUsername(),
            'password' => $alfaProvider->getPassword(),
        ]);
        $url = sprintf('%s/%s', $alfaProvider->getGateway(), $method);

        $response = Http::post($url, [
            $data,
        ]);

        return $response->json();
    }
}
