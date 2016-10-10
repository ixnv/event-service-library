<?php

namespace EventServiceLib\Message;

/**
 * Class BillingMessage
 * @package EventServiceLib\Message
 */
class BillingMessage extends AbstractGetresponseMessage
{


    protected $purchase_date;

    /**
     * @return mixed
     */
    public function getPurchaseDate()
    {
        return $this->purchase_date;
    }

    /**
     * @param mixed $purchase_date
     * @return BillingMessage
     */
    public function setPurchaseDate($purchase_date)
    {
        $this->purchase_date = $purchase_date;
        return $this;
    }


    function isValid()
    {
        return parent::isValid() && !empty($this->purchase_date);
    }


    public function getEventIdentity()
    {
        return 'billing';
    }


}