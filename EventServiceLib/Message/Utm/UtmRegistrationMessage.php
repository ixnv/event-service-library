<?php

namespace EventServiceLib\Message\Utm;

use EventServiceLib\Message\AbstractMessage;

final class UtmRegistrationMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'utmRegistration';

    private $elamaId;
    private $registrationSource;

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty([$this->elamaId, $this->registrationSource]);
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
     * @return UtmRegistrationMessage
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegistrationSource()
    {
        return $this->registrationSource;
    }

    /**
     * @param string $registrationSource
     * @return UtmRegistrationMessage
     */
    public function setRegistrationSource($registrationSource)
    {
        $this->registrationSource = $registrationSource;
        return $this;
    }
}
