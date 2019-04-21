<?php

namespace Iiko\Biz\Api;

use Iiko\Biz\Client;
use JsonSerializable;
use Psr\Http\Message\ResponseInterface;

class AbstractApi
{
    /**
     * @var Client
     */
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    protected function get(string $path, array $params = []): ResponseInterface
    {
        $response = $this->client->getHttpClient()->get($this->buildPath($path, $params));

        return $response;
    }

    protected function buildPath(string $path, array $params = []): string
    {
        return $path . '?' . http_build_query(array_merge($this->client->getRequestParams(), $params));
    }

    protected function post(string $path, JsonSerializable $request, array $params = []): ResponseInterface
    {
        return $this->client->getHttpClient()->post(
            $this->buildPath($path, $params),
            ['json' => $request]
        );
    }

    public function decodeResponse(ResponseInterface $response)
    {
        return \GuzzleHttp\json_decode($response->getBody(), true);
    }
}