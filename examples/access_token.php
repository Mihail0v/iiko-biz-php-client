<?php
$composer = require_once __DIR__ . '/../vendor/autoload.php';

$client = new \Iiko\Biz\Client([
    'user_id' => 123,
    'user_secret' => 123,
]);
$client->getRequestParams();
try {
    $client->client->get('auth/access_token?user_id=1&user_secret=2');
} catch (\GuzzleHttp\Exception\ClientException $e) {
    echo $e->getResponse()->getBody();
}