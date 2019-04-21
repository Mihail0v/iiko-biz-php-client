<?php

namespace Iiko\Biz\Models;

class PaymentItem extends AbstractModel
{
    public function setSum($sum)
    {
        $this->setData('sum', $sum);
    }
    public function setPaymentType($type){

    }
}