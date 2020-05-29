<?php

namespace EventServiceLib\Message\Report;

use EventServiceLib\Message\AbstractMessage;

class GetReportTrialMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'getReportTrial';

    protected $elamaId;

    /**
     * @return int
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

    /**
     * @param int $elamaId
     * @return GetReportTrialMessage
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;

        return $this;
    }

    /**
     * @return string
     */
    function getEventIdentity()
    {
        return self::EVENT_IDENTITY;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->elamaId,
            ]
        );
    }
}
