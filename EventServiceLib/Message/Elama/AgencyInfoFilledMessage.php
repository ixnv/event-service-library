<?php

namespace EventServiceLib\Message\Elama;

use EventServiceLib\Message\AbstractMessage;

/** при заполнение первичной информации об агентстве */
class AgencyInfoFilledMessage extends AbstractMessage
{
    protected $elamaId;
    protected $agencyId;

    /**
     * @return int
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

    /**
     * @param int $elamaId
     * @return AgencyInfoFilledMessage
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgencyId()
    {
        return $this->agencyId;
    }

    /**
     * @param int $agencyId
     * @return AgencyInfoFilledMessage
     */
    public function setAgencyId($agencyId)
    {
        $this->agencyId = $agencyId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->elamaId
            ]
        );
    }

    /**
     * @return string
     */
    function getEventIdentity()
    {
        return 'agencyInfoFilled';
    }
}
