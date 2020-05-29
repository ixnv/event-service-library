<?php

namespace EventServiceLib\Message\Elama;

use EventServiceLib\Message\AbstractMessage;

class AgencyClientRemovedMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'agencyClientRemoved';

    protected $clientElamaId;
    protected $elamaId;
    protected $agencyId;
    protected $removingDate;

    /**
     * @return integer
     */
    public function getClientElamaId()
    {
        return $this->clientElamaId;
    }

    /**
     * @param integer $clientElamaId
     * @return AgencyClientRemovedMessage
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
     * @return AgencyClientRemovedMessage
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
     * @return AgencyClientRemovedMessage
     */
    public function setAgencyId($agencyId)
    {
        $this->agencyId = $agencyId;

        return $this;
    }

    /**
     * @return string
     */
    public function getRemovingDate()
    {
        return $this->removingDate;
    }

    /**
     * @param string $removingDate - date string in "Y-m-d" format
     * @return AgencyClientRemovedMessage
     */
    public function setRemovingDate($removingDate)
    {
        $this->removingDate = $removingDate;

        return $this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->clientElamaId,
                $this->elamaId,
                $this->agencyId,
                $this->removingDate,
            ]
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
