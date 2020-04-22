<?php declare(strict_types=1);

namespace EventServiceLib\Message\Elama;

use EventServiceLib\EventServiceValues;
use EventServiceLib\Message\AbstractMessage;

/** при выплате вознагрождения агентству */
class AgencyCommissionReceivedMessage extends AbstractMessage
{

    protected $elamaId;
    protected $agencyId;
    protected $legalType;
    protected $amount = 0;

    /**
     * @return integer
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

    /**
     * @param integer $elamaId
     * @return AgencyCommissionReceivedMessage
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;
        return $this;
    }

    /**
     * @return integer
     */
    public function getAgencyId()
    {
        return $this->agencyId;
    }

    /**
     * @param integer $agencyId
     * @return AgencyCommissionReceivedMessage
     */
    public function setAgencyId($agencyId)
    {
        $this->agencyId = $agencyId;
        return $this;
    }

    /**
     * @return string
     */
    public function getLegalType()
    {
        return $this->legalType;
    }

    /**
     * @param string $legalType
     * @return AgencyCommissionReceivedMessage
     */
    public function setLegalType($legalType)
    {
        $this->legalType = $legalType;
        return $this;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     * @return AgencyCommissionReceivedMessage
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
                [
                    $this->elamaId,
                    $this->agencyId,
                    $this->legalType,
                ]
            ) && in_array(
                $this->legalType,
                [EventServiceValues::LEGAL_TYPE_ENTITY, EventServiceValues::LEGAL_TYPE_PERSON]
            );
    }

    /**
     * @return string
     */
    function getEventIdentity()
    {
        return 'agencyCommissionReceived';
    }
}
