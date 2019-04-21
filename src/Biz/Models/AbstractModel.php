<?php

namespace Iiko\Biz\Models;

use JsonSerializable;

class AbstractModel implements JsonSerializable
{
    protected $data;

    public function __construct(array $data = array())
    {
        $this->data = $data;
    }

    public function setData(string $key, $value)
    {
        $this->data[$key] = $value;
    }

    public function getData(string $key = null, $default = null)
    {
        if ($key === null) {
            return $this->data;
        }
        return $this->data[$key] ?? $default;
    }

    public function jsonSerialize()
    {
        return $this->data;
    }
}