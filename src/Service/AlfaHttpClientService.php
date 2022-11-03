<?php

namespace Sun\EpayAlfa\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Sun\EpayAlfa\Config\AlfaProvider;
use Sun\EpayAlfa\Dto\RequestDto\RequestDtoInterface;
use Sun\EpayAlfa\Dto\ResponseDto\ResponseDtoInterface;
use Sun\EpayAlfa\Exceptions\InternalError;
use Sun\EpayAlfa\Mapper\ArrayObjectMapper;

class AlfaHttpClientService
{
    private const REQUEST_METHOD = 'POST';

    private Client $client;

    public function __construct(
        private ArrayObjectMapper $arrayObjectMapper,
        private AlfaProvider $alfaProvider,
    ) {
        $this->client = new Client([
            'base_uri' => $alfaProvider->getGateway(),
        ]);
    }

    public function request(string $method, RequestDtoInterface $requestDto, string $responseType): ResponseDtoInterface
    {
        try {
            $formParams = array_merge($this->arrayObjectMapper->serialize($requestDto), [
                'userName' => $this->alfaProvider->getUsername(),
                'password' => $this->alfaProvider->getPassword(),
            ]);

            $response = $this->client->request(self::REQUEST_METHOD, $method, [
                RequestOptions::FORM_PARAMS => $formParams,
            ]);

            $data = $this->encodeResponse((string)$response->getBody());
            return $this->arrayObjectMapper->deserialize($data, $responseType);
        } catch (GuzzleException $e) {
            throw new InternalError('Error sending request', $e);
        }
    }

    private function encodeResponse(string $body): array
    {
        return json_decode($body, true);
    }
}
