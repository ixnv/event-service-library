<?php

namespace EventServiceLib\Message\Utm;

use EventServiceLib\Message\AbstractMessage;

class UtmRegistrationMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'utmRegistration';

    protected $elamaId;
    protected $registrationSource;

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

    public function isValid()
    {
        return !$this->hasEmpty([$this->elamaId, $this->registrationSource]);
    }

    function getEventIdentity()
    {
        return 'utmRegistration';
    }
}
