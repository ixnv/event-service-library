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

    protected $transferCurrency;

    protected $transferDate;

    protected $advPlatform;

    protected $phone;

    protected $advSystemAccountId;

    /**
     * @return string
     */
    function getEventIdentity()
    {
        return 'advPayment';
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
     *
     * @return AdvPaymentMessage
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;

        return $this;
    }

    /**
     * @return float
     */
    public function getTransferAmount()
    {
        return $this->transferAmount;
    }

    /**
     * @param float $transferAmount
     *
     * @return AdvPaymentMessage
     */
    public function setTransferAmount($transferAmount)
    {
        $this->transferAmount = $transferAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransferDate()
    {
        return $this->transferDate;
    }

    /**
     * @param string $transferDate
     *
     * @return AdvPaymentMessage
     */
    public function setTransferDate($transferDate)
    {
        $this->transferDate = $transferDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdvPlatform()
    {
        return $this->advPlatform;
    }

    /**
     * @param string $advPlatform
     *
     * @return AdvPaymentMessage
     */
    public function setAdvPlatform($advPlatform)
    {
        $this->advPlatform = $advPlatform;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     *
     * @return AdvPaymentMessage
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransferCurrency()
    {
        return $this->transferCurrency;
    }

    /**
     * @param string $transferCurrency
     * @return AdvPaymentMessage
     */
    public function setTransferCurrency($transferCurrency)
    {
        $this->transferCurrency = $transferCurrency;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdvSystemAccountId()
    {
        return $this->advSystemAccountId;
    }

    /**
     * @param string $advSystemAccountId
     * @return AdvPaymentMessage
     */
    public function setAdvSystemAccountId($advSystemAccountId)
    {
        $this->advSystemAccountId = $advSystemAccountId;

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
            $this->transferCurrency,
            $this->transferDate,
            $this->advPlatform,
            $this->advSystemAccountId
        ]);
    }

}