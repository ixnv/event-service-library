<?php

namespace EventServiceLib\Message;

use EventServiceLib\Message\Traits\AmoCrmMessageTrait;
use EventServiceLib\Message\Traits\ArrayEmailTrait;

final class AdvPaymentMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'advPayment';

    use AmoCrmMessageTrait;
    use ArrayEmailTrait;

    private $elamaId;
    private $transferAmount;
    private $transferCurrency;
    private $transferDate;
    private $advPlatform;
    private $phone;
    private $advSystemAccountId;
    private $chargedAmount;
    private $chargedAmountCurrency;
    private $chargedAmountToRubRate;

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->email,
                $this->elamaLogin,
                $this->transferAmount,
                $this->transferCurrency,
                $this->transferDate,
                $this->advPlatform,
                $this->advSystemAccountId,
                $this->chargedAmount,
                $this->chargedAmountCurrency,
                $this->chargedAmountToRubRate
            ]
        );
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
     * @return string
     */
    public function getChargedAmount()
    {
        return $this->chargedAmount;
    }

    /**
     * @param string $chargedAmount
     * @return AdvPaymentMessage
     */
    public function setChargedAmount($chargedAmount)
    {
        $this->chargedAmount = $chargedAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getChargedAmountCurrency()
    {
        return $this->chargedAmountCurrency;
    }

    /**
     * @param string $chargedAmountCurrency
     * @return AdvPaymentMessage
     */
    public function setChargedAmountCurrency($chargedAmountCurrency)
    {
        $this->chargedAmountCurrency = $chargedAmountCurrency;
        return $this;
    }

    /**
     * @return float
     */
    public function getChargedAmountToRubRate()
    {
        return $this->chargedAmountToRubRate;
    }

    /**
     * @param float $chargedAmountToRubRate
     * @return AdvPaymentMessage
     */
    public function setChargedAmountToRubRate($chargedAmountToRubRate)
    {
        $this->chargedAmountToRubRate = $chargedAmountToRubRate;
        return $this;
    }
}
