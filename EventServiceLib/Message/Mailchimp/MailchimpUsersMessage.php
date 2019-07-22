<?php

namespace EventServiceLib\Message\Mailchimp;

class MailchimpUsersMessage
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

}