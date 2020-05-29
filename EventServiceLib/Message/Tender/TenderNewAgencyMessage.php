<?php

namespace EventServiceLib\Message\Tender;

use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\Traits\LocalizationTrait;

class TenderNewAgencyMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'tenderNewAgency';

    use LocalizationTrait;

    protected $email;

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return TenderNewAgencyMessage
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    function getEventIdentity()
    {
        return self::EVENT_IDENTITY;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->email,
                $this->locale
            ]
        );
    }
}
