<?php

namespace Iiko\Biz\Models;

class OrderItemModifier extends AbstractModel
{
    public function setId($id)
    {
        $this->setData('id', $id);
    }

    public function setName($name)
    {
        $this->setData('name', $name);
    }

    public function setAmount($amount)
    {
        $this->setData('amount', $amount);
    }

    public function setGroupId($id)
    {
        $this->setData('groupId', $id);
    }

    public function getGroupName($name)
    {
        $this->setData('groupName', $name);
    }
}