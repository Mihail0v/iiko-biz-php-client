<?php

namespace Iiko\Biz\Models;

class OrderRequest extends AbstractModel
{
    public function setOrganization($id)
    {
        $this->setData('organization', $id);
    }

    public function setDeliveryTerminalId($id)
    {
        $this->setData('deliveryTerminalId', $id);
    }

    public function setCustomer($customer)
    {
        $this->setData('customer', $customer);
    }

    public function setOrder(Order $order)
    {
        $this->setData('order', $order);
    }

    public function setCoupon($coupon)
    {
        $this->setData('coupon', $coupon);
    }

    public function setAvailablePaymentMarketingCampaignIds(array $ids)
    {
        $this->setData('availablePaymentMarketingCampaignIds', $ids);
    }

    public function setApplicableManualConditions(array $ids)
    {
        $this->setData('applicableManualConditions', $ids);
    }

    public function setCustomData($data)
    {
        $this->setData('customData', (string)$data);
    }

    public function setEmailForFailedOrderInfo($email)
    {
        $this->setData('emailForFailedOrderInfo', $email);
    }
}