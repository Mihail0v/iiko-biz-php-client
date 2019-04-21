<?php

namespace Iiko\Biz\Models;

class OrderItem extends AbstractModel
{
    public function setId($id)
    {
        $this->setData('id', $id);
    }

    public function setCode($code)
    {
        $this->setData('code', $code);
    }

    public function setName($name)
    {
        $this->setData('name', $name);
    }

    public function setAmount($amount)
    {
        $this->setData('amount', $amount);
    }

    public function setSum($sum)
    {
        $this->setData('sum', $sum);
    }

    public function setComment($comment)
    {
        $this->setData('comment', $comment);
    }

    public function setGuestId($id)
    {
        $this->setData('guestId', $id);
    }

    public function setComboInformation(ComboItemInformation $information)
    {
        $this->setData('comboInformation', $information);
    }

    public function setModifiers(array $items)
    {
        foreach ($items as $item) {
            $this->addModifier($item);
        }
    }

    public function addModifier(OrderItemModifier $item)
    {
        $this->setData('modifiers', array_merge([$item], $this->getData('modifiers', [])));
    }
}