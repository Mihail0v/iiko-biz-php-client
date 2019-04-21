<?php

namespace Iiko\Biz\Api;

class Organizations extends AbstractApi
{
    public function list()
    {
        $response = $this->get('organization/list');

        return $this->decodeResponse($response);
    }
}