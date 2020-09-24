<?php

namespace Sun\EpayAlfa;

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

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => http_build_query($data),
        ]);
        $response = curl_exec($curl);

        $response = json_decode($response, true);
        curl_close($curl);
        return $response;
    }
}
