<?php


namespace Iiko\Biz;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use Iiko\Biz\Api\DeliverySettings;
use Iiko\Biz\Api\Exception\WrongCredentialsException;
use Iiko\Biz\Api\Orders;
use Iiko\Biz\Api\Organizations;

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
                'request_timeout' => '0:0:30'
            ],
            $config
        );
        $this->client = $this->createDefaultHttpClient();
        $this->token = $this->getSecretToken();
    }

    /**
     * @return mixed
     * @throws WrongCredentialsException
     */
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
                throw new WrongCredentialsException();
            }
            throw $e;
        }
        return json_decode($response->getBody()->getContents(), true);
    }

    protected function createDefaultHttpClient(): GuzzleClient
    {
        return new GuzzleClient([
            'base_uri' => self::API_BASE_URI,
        ]);
    }

    public function orders(): Orders
    {
        return new Orders($this);
    }

    public function organizations(): Organizations
    {
        return new Organizations($this);
    }

    public function deliveryTerminals(): DeliverySettings
    {
        return new DeliverySettings($this);
    }

    public function getHttpClient()
    {
        return $this->client;
    }

    public function getRequestParams(): array
    {
        return [
            'access_token' => $this->token,
            'request_timeout' => $this->config['request_timeout']
        ];
    }
}