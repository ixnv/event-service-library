<?php

namespace EventServiceLib\Message\Notificator;

use EventServiceLib\Message\AbstractMessage;

class UserLeaveH2SForm extends AbstractMessage
{
    public $elamaId;

    public function isValid()
    {
        return !$this->hasEmpty([$this->elamaId]);
    }

    public function getEventIdentity()
    {
        return 'leaveH2SForm';
    }

    public function setElamaId(int $elamaId)
    {
        $this->elamaId = $elamaId;
    }

    public function getElamaId(): int
    {
        return $this->elamaId;
    }

}