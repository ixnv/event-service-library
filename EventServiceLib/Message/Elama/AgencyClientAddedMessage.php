<?php

namespace EventServiceLib\Message\Elama;

use EventServiceLib\EventServiceValues;
use EventServiceLib\Message\AbstractMessage;

final class AgencyClientAddedMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'agencyClientAdded';

    private $clientElamaId;
    private $elamaId;
    private $agencyId;
    private $legalType;
    private $addingDate;

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
                [
//                $this->clientElamaId, // BC, вернуть как только агентства обновят событие
                    $this->elamaId,
                    $this->agencyId,
                    $this->legalType,
                    $this->addingDate,
                ]
            ) && in_array(
                $this->legalType,
                [EventServiceValues::LEGAL_TYPE_ENTITY, EventServiceValues::LEGAL_TYPE_PERSON]
            );
    }

    /**
     * @return integer
     */
    public function getClientElamaId()
    {
        return $this->clientElamaId;
    }

    /**
     * @param integer $clientElamaId
     * @return AgencyClientAddedMessage
     */
    public function setClientElamaId($clientElamaId)
    {
        $this->clientElamaId = $clientElamaId;
        return $this;
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
     * @return AgencyClientAddedMessage
     */
    public function setAddingDate($addingDate)
    {
        $this->addingDate = $addingDate;
        return $this;
    }
}
