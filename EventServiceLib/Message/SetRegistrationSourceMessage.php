<?php

namespace EventServiceLib\Message;


class SetRegistrationSourceMessage extends AbstractMessage
{
    /** @var string */
    protected $elamaId;

    /** @var string */
    protected $registrationSource;

    /**
     * @return string
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

    /**
     * @param string $elamaId
     *
     * @return SetRegistrationSourceMessage
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
     * @return SetRegistrationSourceMessage
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
        return 'setRegistrationSource';
    }
}