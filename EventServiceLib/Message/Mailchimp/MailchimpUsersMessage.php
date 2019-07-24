<?php

namespace EventServiceLib\Message\Mailchimp;

use EventServiceLib\Message\AbstractMessage;

class MailchimpUsersMessage extends AbstractMessage
{
    public $elamaId;
    public $interestCategory;
    public $interest;

    /**
     * @return string
     */
    public function getInterest()
    {
        return $this->interest;
    }

    /**
     * @param string $interest
     */
    public function setInterest($interest)
    {
        $this->interest = $interest;
    }

    /**
     * @return string
     */
    public function getInterestCategory()
    {
        return $this->interestCategory;
    }

    /**
     * @param string $interestCategory
     */
    public function setInterestCategory($interestCategory)
    {
        $this->interestCategory = $interestCategory;
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