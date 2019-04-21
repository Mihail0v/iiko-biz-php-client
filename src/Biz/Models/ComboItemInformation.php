<?php

namespace Iiko\Biz\Models;

class ComboItemInformation extends AbstractModel
{
    public function setComboId($id)
    {
        $this->setData('comboId', $id);
    }

    public function setComboSourceId($id)
    {
        $this->setData('comboSourceId', $id);
    }

    public function setGroupId($id)
    {
        $this->setData('groupId', $id);
    }
}