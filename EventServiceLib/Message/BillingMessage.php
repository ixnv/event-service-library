<?php

namespace EventServiceLib\Message;


use EventServiceLib\Message\Traits\AmoCrmMessageTrait;
use EventServiceLib\Message\Traits\ArrayEmailTrait;
use EventServiceLib\Message\Traits\GetresponseMessageTrait;

/**
 * Class BillingMessage
 * @package EventServiceLib\Message
 */
class BillingMessage extends AbstractMessage
{

    use GetresponseMessageTrait;
    use AmoCrmMessageTrait;
    use ArrayEmailTrait;

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
     *
     * @return BillingMessage
     */
    public function setPurchaseDate($purchase_date)
    {
        $this->purchase_date = $purchase_date;

        return $this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty([
            $this->email,
            $this->name,
            $this->elamaLogin,
            $this->purchase_date,
        ]);
    }

    /**
     * @return string
     */
    public function getEventIdentity()
    {
        return 'billing';
    }

}