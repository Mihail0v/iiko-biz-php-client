<?php

namespace Iiko\Biz\Api;

use Iiko\Biz\Client;

class AbstractApi
{
    /**
     * @var Client
     */
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param $path
     * @param array $parameters
     * @param array $requestHeaders
     * @return Response
     */
    protected function get($path)
    {
        $response = $this->client->getHttpClient()->get($this->buildPath($path));

        return new Response($response);
    }

    protected function buildPath($path)
    {
        return $path . '?' . http_build_query($this->client->getRequestParams());
    }

    protected function post($path)
    {
        $response = $this->client->getHttpClient()->post(
            $this->buildPath($path)
        );
    }

    protected function createJson(array $params)
    {
        return count($params) === 0 ? null : json_encode($params, empty($params) ? JSON_FORCE_OBJECT : 0);
    }
}