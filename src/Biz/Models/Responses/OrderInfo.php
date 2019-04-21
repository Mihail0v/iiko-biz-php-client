<?php

namespace Iiko\Biz\Models\Responses;

use Iiko\Biz\Models\AbstractModel;
use Iiko\Biz\Models\Address;
use Iiko\Biz\Models\Customer;

class OrderInfo extends AbstractModel
{
    const STATUS_NEW = 'NEW';
    const STATUS_AWAITING_DELIVERY = 'AWAITING DELIVERY';

    public function __construct(array $data = array())
    {
        parent::__construct($data);
        $this->setData(
            'customer',
            new Customer($this->getData('customer'))
        );
        $this->setData(
            'address',
            new Address($this->getData('address'))
        );
    }

    /**
     * Идентификатор заказа
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->getData('orderId');
    }

    /**
     * Идентификатор заказчика
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->getData('customerId');
    }

    /**
     * Клиент доставки
     *
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->getData('customer');
    }

    /**
     * Адрес доставки
     *
     * @return Address
     */
    public function getAddress()
    {
        return $this->getData('address');
    }

    /**
     * Идентификатор ресторана
     *
     * @return string
     */
    public function getOrganization()
    {
        return $this->getData('organization');
    }

    /**
     * Сумма заказа
     *
     * @return int
     */
    public function getSum()
    {
        return $this->getData('sum');
    }

    /**
     * Сумма скидки
     *
     * @return int
     */
    public function getDiscount()
    {
        return $this->getData('discount');
    }

    /**
     * Понятный номер заказа. Может использоваться для передачи клиенту.
     * Уникальность не гарантирована
     * (может быть уникальным в рамках одного обслуживающего сервера).
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->getData('number');
    }

    /**
     * Статус заказа
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->getData('status');
    }
}