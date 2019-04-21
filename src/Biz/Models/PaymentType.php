<?php

namespace Iiko\Biz\Models;

class PaymentType extends AbstractModel
{
    /**
     * Идентификатор типа оплаты
     *
     * @param $id string GUID
     */
    public function setId($id)
    {
        $this->setData('id', $id);
    }

    /**
     * Код типа оплаты
     *
     * @param $code string
     */
    public function setCode($code)
    {
        $this->setData('code', $code);
    }

    /**
     * Називания типа оплаты
     *
     * @param $name string
     */
    public function setName($name)
    {
        $this->setData('name', $name);
    }

    /**
     * Комментарий к типу оплаты
     *
     * @param $comment string
     */
    public function setComment($comment)
    {
        $this->setData('comment', $comment);
    }

    /**
     * Признак комбинируемости
     *
     * @param $bool bool
     */
    public function setCombinable($bool)
    {
        $this->setData('combinable', $bool);
    }

    /**
     * Номер ревизии сущности из РМС
     *
     * @param $revision int
     */
    public function setExternalRevision($revision)
    {
        $this->setData('externalRevision', $revision);
    }

    /**
     * Признак, удален тип оплаты или нет
     *
     * @param $bool bool
     */
    public function setDeleted($bool)
    {
        $this->setData('deleted', $bool);
    }

    /**
     * Массив маркетинговых акций, связанных с типом оплаты iikoCard5,
     * применяемых для данной организации.
     *
     * @param array $ids GUID[]
     */
    public function setApplicableMarketingCampaigns(array $ids)
    {
        $this->setData('applicableMarketingCampaigns', $ids);
    }
}