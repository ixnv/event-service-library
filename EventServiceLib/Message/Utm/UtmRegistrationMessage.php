<?php

namespace EventServiceLib\Message\Utm;

use EventServiceLib\Message\AbstractMessage;

class UtmRegistrationMessage extends AbstractMessage
{
    /** @var int */
    protected $elamaId;

    /** @var string */
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
     *
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
     *
     * @return UtmRegistrationMessage
     */
    public function setRegistrationSource($registrationSource)
    {
        $this->registrationSource = $registrationSource;

        return $this;
    }

    public function isValid()
    {
        return !$this->hasEmpty([
            $this->elamaId,
        ]);
    }

    function getEventIdentity()
    {
        return 'utmRegistration';
    }
}