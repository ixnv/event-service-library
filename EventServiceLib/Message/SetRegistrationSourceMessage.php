<?php


namespace EventServiceLib\Message;


use EventServiceLib\Message\Traits\AmoCrmMessageTrait;

class SetRegistrationSourceMessage
{
    use AmoCrmMessageTrait;

    /** @var integer */
    private $elamaId;

    /** @var string */
    private $registrationSource;

    /**
     * @return mixed
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

    /**
     * @param mixed $elamaId
     * @return SetRegistrationSourceMessage
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRegistrationSource()
    {
        return $this->registrationSource;
    }

    /**
     * @param mixed $registrationSource
     * @return SetRegistrationSourceMessage
     */
    public function setRegistrationSource($registrationSource)
    {
        $this->registrationSource = $registrationSource;
        return $this;
    }

}