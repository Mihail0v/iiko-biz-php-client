<?php

namespace Iiko\Biz\Models;

use DateTimeInterface;

class Customer extends AbstractModel
{
    const SEX_NOT_SPECIFIED = 0;
    const SEX_MALE = 1;
    const SEX_FEMALE = 2;

    public function setId($id)
    {
        $this->setData('id', $id);
    }

    public function setName($name)
    {
        $this->setData('name', $name);
    }

    public function setPhone($phone)
    {
        $this->setData('phone', $phone);
    }

    public function setCultureName($name)
    {
        $this->setData('cultureName', $name);
    }

    public function setBirthday(DateTimeInterface $birthday)
    {
        $this->setData('birthday', $birthday->format('d.m.Y'));
    }

    public function setEmail($email)
    {
        $this->setData('email', $email);
    }

    public function setNick($nick)
    {
        $this->setData('nick', $nick);
    }

    public function setMiddleName($name)
    {
        $this->setData('middleName', $name);
    }

    public function setSurName($name)
    {
        $this->setData('surName', $name);
    }

    public function setShouldReceivePromoActionsInfo($value)
    {
        $this->setData('shouldReceivePromoActionsInfo', $value);
    }

    public function setSex($sex)
    {
        $this->setData('sex', $sex);
    }
}
