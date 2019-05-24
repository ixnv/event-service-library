<?php

namespace EventServiceLib\Message;

use EventServiceLib\Message\Traits\LocalizationTrait;

class TenderNewAgencyMessage extends AbstractMessage
{

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
     *
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
        return 'tenderNewAgency';
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty([
            $this->email,
            $this->locale
        ]);
    }

}