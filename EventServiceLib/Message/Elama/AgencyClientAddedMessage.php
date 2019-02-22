<?php declare(strict_types=1);

namespace EventServiceLib\Message\Elama;

use EventServiceLib\EventServiceValues;
use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\ProjectSpecificMessageInterface;

class AgencyClientAddedMessage extends AbstractMessage implements ProjectSpecificMessageInterface
{

    protected $elamaId;
    protected $agencyId;
    protected $legalType;
    protected $addingDate;

    /**
     * @return integer
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

    /**
     * @param integer $elamaId
     * @return AgencyClientAddedMessage
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
     * @return AgencyClientAddedMessage
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
     * @return AgencyClientAddedMessage
     */
    public function setLegalType($legalType)
    {
        $this->legalType = $legalType;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddingDate()
    {
        return $this->addingDate;
    }

    /**
     * @param string $addingDate - date string in "Y-m-d" format
     */
    public function setAddingDate($addingDate)
    {
        $this->addingDate = $addingDate;
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
                $this->addingDate,
            ]) && in_array($this->legalType, [EventServiceValues::LEGAL_TYPE_ENTITY, EventServiceValues::LEGAL_TYPE_PERSON]);
    }

    /**
     * @return string
     */
    function getEventIdentity()
    {
        return 'agencyClientAdded';
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