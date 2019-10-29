<?php

namespace EventServiceLib\Message\Report;

use EventServiceLib\Message\AbstractMessage;

class GetReportTrialMessage extends AbstractMessage
{

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
        return 'getReportTrial';
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty([
            $this->elamaId,
        ]);
    }

}