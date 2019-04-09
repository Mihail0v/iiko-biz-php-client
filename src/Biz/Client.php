<?php


namespace Iiko\Biz;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;

class Client
{
    const API_BASE_URI = 'https://iiko.biz:9900/api/0/';
    /**
     * @var ClientInterface
     */
    public $client;
    /**
     * @var array
     */
    private $config;
    /**
     * @var string
     */
    private $token;

    public function __construct($config = array())
    {
        $this->config = array_merge(
            [
                'request_timeout' => 1000
            ],
            $config
        );
        $this->client = $this->createDefaultHttpClient();
        $this->token = $this->getSecretToken();
    }

    protected function getSecretToken()
    {
        try {
            $response = $this->client->get(
                sprintf(
                    'auth/access_token?user_id=%s&user_secret=%s',
                    $this->config['user_id'],
                    $this->config['user_secret']
                )
            );
        } catch (ClientException $e) {
            if ($e->getCode() === 400) {
                echo 'not authorized';
                exit;
            }
        }
        return $response->getBody();
    }

    protected function createDefaultHttpClient()
    {
        return new GuzzleClient([
            'base_uri' => self::API_BASE_URI,
        ]);
    }

    /**
     * @param $name string
     */
    public function api($name)
    {
        switch ($name) {
            case 'auth':
                $api = '';
                break;
        }
        return $api;
    }

    public function getHttpClient()
    {
        return $this->client;
    }

    public function getRequestParams()
    {
        return http_build_query([
            'access_token' => $this->token,
            'request_timeout' => $this->config['request_timeout']
        ]);
    }
}