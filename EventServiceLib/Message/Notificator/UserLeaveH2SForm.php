<?php


namespace EventServiceLib\Message\Notificator;


use EventServiceLib\Message\AbstractMessage;

class UserLeaveH2SForm extends AbstractMessage
{
    public $data = [];

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

    function getEventIdentity()
    {
        return 'leaveH2SForm';
    }
}