<?php


namespace EventServiceLib\Message;


use EventServiceLib\Message\Traits\AmoCrmMessageTrait;
use EventServiceLib\Message\Traits\ArrayEmailTrait;

class AdvPaymentMessage extends AbstractMessage
{
    use AmoCrmMessageTrait;
    use ArrayEmailTrait;

    protected $elamaId;

    protected $transferAmount;

    protected $transferDate;

    protected $advPlatform;

    protected $phone;

    /**
     * @return string
     */
    function getEventIdentity()
    {
        return 'advPayment';
    }

    /**
     * @return mixed
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

    /**
     * @param mixed $elamaId
     *
     * @return AdvPaymentMessage
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransferAmount()
    {
        return $this->transferAmount;
    }

    /**
     * @param mixed $transferAmount
     *
     * @return AdvPaymentMessage
     */
    public function setTransferAmount($transferAmount)
    {
        $this->transferAmount = $transferAmount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransferDate()
    {
        return $this->transferDate;
    }

    /**
     * @param mixed $transferDate
     *
     * @return AdvPaymentMessage
     */
    public function setTransferDate($transferDate)
    {
        $this->transferDate = $transferDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAdvPlatform()
    {
        return $this->advPlatform;
    }

    /**
     * @param mixed $advPlatform
     *
     * @return AdvPaymentMessage
     */
    public function setAdvPlatform($advPlatform)
    {
        $this->advPlatform = $advPlatform;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     *
     * @return AdvPaymentMessage
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty([
            $this->email,
            $this->elamaLogin,
            $this->transferAmount,
            $this->transferDate,
            $this->advPlatform,
        ]);
    }

}