<?php

namespace EventServiceLib\Message\Mailchimp;

use EventServiceLib\Message\AbstractMessage;

class MailchimpUsersMessage extends AbstractMessage
{
    public $elamaId;

    /**
     * @return int
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

    /**
     * @param int $elamaId
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty([$this->elamaId]);
    }

    /**
     * @return string
     */
    function getEventIdentity()
    {
        return 'mailchimpUsers';
    }

}