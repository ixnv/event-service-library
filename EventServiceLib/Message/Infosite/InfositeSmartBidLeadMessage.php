<?php

namespace EventServiceLib\Message\Infosite;

use EventServiceLib\Message\AbstractMessage;

final class InfositeSmartBidLeadMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'infositeSmartBidLead';

    private $email;
    private $locale;

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->locale,
                $this->email
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
     * @return InfositeSmartBidLeadMessage
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     * @return InfositeSmartBidLeadMessage
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        return $this;
    }
}
