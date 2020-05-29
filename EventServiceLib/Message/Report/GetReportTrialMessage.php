<?php

namespace EventServiceLib\Message\Report;

use EventServiceLib\Message\AbstractMessage;

final  class GetReportTrialMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'getReportTrial';

    private $elamaId;

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
}
