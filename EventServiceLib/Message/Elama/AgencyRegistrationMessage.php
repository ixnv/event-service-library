<?php declare(strict_types=1);

namespace EventServiceLib\Message\Elama;

use EventServiceLib\EventServiceValues;
use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\ProjectSpecificMessageInterface;

class AgencyRegistrationMessage extends AbstractMessage implements ProjectSpecificMessageInterface
{
    
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
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * @return $this
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
        return !$this->hasEmpty([
            $this->elamaId,
            $this->agencyId,
            $this->legalType,
            $this->agencyRegistrationDate,
        ]) && in_array($this->legalType, [EventServiceValues::LEGAL_TYPE_ENTITY, EventServiceValues::LEGAL_TYPE_PERSON]);
    }

    /**
     * @return string
     */
    function getEventIdentity()
    {
        return 'agencyRegistration';
    }

    /**
     * @return string
     */
    public function getProjectIdentity()
    {
        return 'Elama';
    }

    /**
     * @return string
     */
    public function getProjectPossession()
    {
        return 'Elama';
    }

}