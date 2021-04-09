<?php

namespace EventServiceLib\Message\Elama;

use EventServiceLib\EventServiceValues;
use EventServiceLib\Message\AbstractMessage;

final class AgencyRegistrationMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'agencyRegistration';

    private $elamaId;
    private $agencyId;
    private $legalType;
    private $agencyRegistrationDate;
    private $additionalParams = [];

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
     * @return array|null
     */
    public function getAdditionalParams()
    {
        return $this->additionalParams;
    }

    /**
     * @param array $additionalParams
     * @return AgencyRegistrationMessage
     */
    public function setAdditionalParams($additionalParams)
    {
        $this->additionalParams = $additionalParams;
        return $this;
    }

    /**
     * @param string $key
     * @param $value
     * @return AgencyRegistrationMessage
     */
    public function addAdditionalParams($key, $value)
    {
        $this->additionalParams[$key] = $value;
        return $this;
    }

    /**
     * @param $key
     * @return AgencyRegistrationMessage
     */
    public function removeAdditionalParams($key)
    {
        unset($this->additionalParams[$key]);
        return $this;
    }
}
