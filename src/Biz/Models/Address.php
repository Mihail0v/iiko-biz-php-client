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
}