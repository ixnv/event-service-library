<?php

namespace EventServiceLib\Message\Elama;

use EventServiceLib\EventServiceValues;
use EventServiceLib\Message\AbstractMessage;

class AgencyRegistrationMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'agencyRegistration';

    protected $elamaId;
    protected $agencyId;
    protected $legalType;
    protected $agencyRegistrationDate;

    /**
     * @return integer
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

    /**
     * @param integer $elamaId
     * @return AgencyRegistrationMessage
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
     * @return AgencyRegistrationMessage
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
     * @return AgencyRegistrationMessage
     */
    public function setLegalType($legalType)
    {
        $this->legalType = $legalType;

        return $this;
    }

    /**
     * @return string
     */
    public function getAgencyRegistrationDate()
    {
        return $this->agencyRegistrationDate;
    }

    /**
     * @param string $agencyRegistrationDate
     * @return AgencyRegistrationMessage
     */
    public function setAgencyRegistrationDate($agencyRegistrationDate)
    {
        $this->agencyRegistrationDate = $agencyRegistrationDate;

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
                    $this->agencyRegistrationDate,
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
