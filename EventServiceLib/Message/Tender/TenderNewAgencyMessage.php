<?php

namespace EventServiceLib\Message\Tender;

use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\Traits\LocalizationTrait;

final class TenderNewAgencyMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'tenderNewAgency';

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
     * @return TenderNewAgencyMessage
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
}
