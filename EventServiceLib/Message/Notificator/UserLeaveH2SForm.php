<?php

namespace EventServiceLib\Message\Notificator;

use EventServiceLib\Message\AbstractMessage;

final class UserLeaveH2SForm extends AbstractMessage
{
    const EVENT_IDENTITY = 'leaveH2SForm';

    private $elamaId;

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty([$this->elamaId]);
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
