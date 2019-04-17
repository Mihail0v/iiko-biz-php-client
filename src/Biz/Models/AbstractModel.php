<?php

namespace Iiko\Biz\Models;

class AbstractModel implements \JsonSerializable
{
    protected $data;

    public function __construct(array $data = array())
    {
        $this->data = $data;
    }

    public function setData($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function getData($key = null, $default = null)
    {
        if ($key === null) {
            return $this->data;
        }
        if (isset($this->data[$key])) {
            return $this->data[$key];
        }
        return $default;
    }

    public function jsonSerialize()
    {
        return $this->data;
    }
}