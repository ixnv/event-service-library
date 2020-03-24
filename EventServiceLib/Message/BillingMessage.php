<?php

namespace EventServiceLib\Message;

use EventServiceLib\Message\Traits\AmoCrmMessageTrait;
use EventServiceLib\Message\Traits\ArrayEmailTrait;
use EventServiceLib\Message\Traits\GetresponseMessageTrait;
use EventServiceLib\Message\Traits\LocalizationTrait;

/**
 * Class BillingMessage
 * @package EventServiceLib\Message
 */
class BillingMessage extends AbstractMessage
{
    use GetresponseMessageTrait;
    use AmoCrmMessageTrait;
    use ArrayEmailTrait;
    use LocalizationTrait;

    protected $purchase_date;

    protected $elamaId;

    protected $contractType;

    protected $amount;

    protected $currency;

    /**
     * @return string
     */
    public function getPurchaseDate()
    {
        return $this->purchase_date;
    }

    /**
     * @param string $purchase_date
     *
     * @return BillingMessage
     */
    public function setPurchaseDate($purchase_date)
    {
        $this->purchase_date = $purchase_date;

        return $this;
    }

    /**
     * @return int
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

    /**
     * @param int $elamaId
     * @return BillingMessage
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;

        return $this;
    }

    /**
     * @return string
     */
    public function getContractType()
    {
        return $this->contractType;
    }

    /**
     * @param string $contractType
     * @return BillingMessage
     */
    public function setContractType($contractType)
    {
        $this->contractType = $contractType;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return BillingMessage
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     * @return BillingMessage
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

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
                $this->contractType,
                $this->amount,
                $this->currency
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