<?php

namespace Iiko\Biz\Models;

use DateTimeInterface;

class Order extends AbstractModel
{
    public function setId($id)
    {
        $this->setData('id', $id);
    }

    public function setPhone($phone)
    {
        $this->setData('phone', (string)$phone);
    }

    public function setIsSelfService($bool)
    {
        $this->setData('isSelfService', (bool)$bool);
    }

    public function setDate(DateTimeInterface $date)
    {
        $this->setData('date', $date->format('Y-m-d H:i:s'));
    }

    public function setParsonsCount($count)
    {
        $this->setData('personsCount', (int)$count);
    }

    public function setFullSum($sum)
    {
        $this->setData('fullSum', $sum);
    }

    public function setAddress(Address $address)
    {
        $this->setData('address', $address);
    }

    public function setItems(array $items)
    {
        foreach ($items as $item) {
            $this->addItem($item);
        }
    }

    public function addItem(OrderItem $item)
    {
        $this->setData('items', array_merge([$item], $this->getData('items', [])));
    }
}