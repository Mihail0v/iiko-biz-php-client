<?php

namespace Iiko\Biz\Models;

class Address extends AbstractModel
{
    public function setCity($city)
    {
        $this->setData('city', $city);
    }

    public function setStreet($street)
    {
        $this->setData('street', $street);
    }

    public function setHome($home)
    {
        $this->setData('home', $home);
    }

    public function setApartment($val)
    {
        $this->setData('apartment', $val);
    }

    public function setFloor($val)
    {
        $this->setData('floor', $val);
    }

    public function setEntrance($val)
    {
        $this->setData('entrance', $val);
    }

    public function setComment($val)
    {
        $this->setData('comment', $val);
    }
}
