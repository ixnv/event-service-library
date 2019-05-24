<?php

namespace EventServiceLib\Message\Tender;

use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\Traits\LocalizationTrait;

class TenderNewClientMessage extends AbstractMessage
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
     * @return TenderNewClientMessage
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
        return 'tenderNewClient';
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