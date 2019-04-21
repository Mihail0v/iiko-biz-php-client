<?php

namespace Iiko\Biz\Api;

class DeliverySettings extends AbstractApi
{
    public function getDeliveryTerminals(string $organization)
    {
        $response = $this->get('deliverySettings/getDeliveryTerminals', ['organization' => $organization]);

        return $this->decodeResponse($response);
    }
}