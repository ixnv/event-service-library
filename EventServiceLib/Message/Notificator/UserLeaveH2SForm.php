<?php

namespace EventServiceLib\Message\Notificator;

use EventServiceLib\Message\AbstractMessage;

class UserLeaveH2SForm extends AbstractMessage
{
    public $elamaId;

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty([$this->elamaId]);
    }

    public function getEventIdentity()
    {
        return 'leaveH2SForm';
    }

    /**
     * @param int $elamaId
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;
    }

    /**
     * @return int
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

}