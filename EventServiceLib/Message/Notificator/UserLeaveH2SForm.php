<?php

namespace EventServiceLib\Message\Notificator;

use EventServiceLib\Message\AbstractMessage;

class UserLeaveH2SForm extends AbstractMessage
{
    const EVENT_IDENTITY = 'leaveH2SForm';

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
        return self::EVENT_IDENTITY;
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
