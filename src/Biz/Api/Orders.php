<?php

namespace Iiko\Biz\Api;

use Iiko\Biz\Models\OrderRequest;
use Iiko\Biz\Models\Responses\OrderInfo;

class Orders extends AbstractApi
{
    public function add(OrderRequest $orderRequest): OrderInfo
    {
        $response = $this->post('orders/add', $orderRequest);

        return new OrderInfo($this->decodeResponse($response));
    }

    public function info(string $orderId, string $organizationId): OrderInfo
    {
        $response = $this->get('orders/info', ['order' => $orderId, 'organization' => $organizationId]);

        return new OrderInfo($this->decodeResponse($response));
    }
}