<?php

namespace EventServiceLib\Message\Notificator;

use EventServiceLib\Message\AbstractMessage;

class UserLeaveH2SForm extends AbstractMessage
{
    public $data = [];
    public $elamaId;

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    public function isValid()
    {
        return true;
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