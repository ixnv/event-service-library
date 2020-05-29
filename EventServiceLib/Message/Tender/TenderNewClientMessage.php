<?php

namespace EventServiceLib\Message\Tender;

use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\Traits\LocalizationTrait;

final class TenderNewClientMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'tenderNewClient';

    use LocalizationTrait;

    private $email;

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

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return TenderNewClientMessage
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
}
