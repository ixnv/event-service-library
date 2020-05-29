<?php

namespace EventServiceLib\Message\Elama;

use EventServiceLib\EventServiceValues;
use EventServiceLib\Message\AbstractMessage;

class AgencyClientMoneyTransferMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'agencyClientMoneyTransfer';

    protected $elamaId;
    protected $agencyId;
    protected $legalType;
    protected $transferDate;

    /**
     * @return integer
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

    /**
     * @param integer $elamaId
     * @return AgencyClientMoneyTransferMessage
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
     * @return AgencyClientMoneyTransferMessage
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
     * @return AgencyClientMoneyTransferMessage
     */
    public function setLegalType($legalType)
    {
        $this->legalType = $legalType;

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
     * @param string $transferDate - date string in "Y-m-d" format
     * @return AgencyClientMoneyTransferMessage
     */
    public function setTransferDate($transferDate)
    {
        $this->transferDate = $transferDate;

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
                    $this->transferDate,
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
        return self::EVENT_IDENTITY;
    }
}
