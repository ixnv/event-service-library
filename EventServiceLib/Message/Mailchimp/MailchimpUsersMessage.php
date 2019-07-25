<?php

namespace EventServiceLib\Message\Mailchimp;

use EventServiceLib\Message\AbstractMessage;

class MailchimpUsersMessage extends AbstractMessage
{
    public $elamaId;
    public $interestCategory;
    public $interest;
    public $carrotquestEvent;

    /**
     * @return string
     */
    public function getCarrotquestEvent()
    {
        return $this->carrotquestEvent;
    }

    /**
     * @param string $carrotquestEvent
     *
     * @return $this
     */
    public function setCarrotquestEvent($carrotquestEvent)
    {
        $this->carrotquestEvent = $carrotquestEvent;

        return $this;
    }

    /**
     * @return string
     */
    public function getInterest()
    {
        return $this->interest;
    }

    /**
     * @param string $interest
     *
     * @return $this
     */
    public function setInterest($interest)
    {
        $this->interest = $interest;

        return $this;
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
     *
     * @return $this
     */
    public function setInterestCategory($interestCategory)
    {
        $this->interestCategory = $interestCategory;

        return $this;
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
     *
     * @return $this
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;

        return $this;
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