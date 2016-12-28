<?php

namespace EventServiceLib\Message\Ppc;


use EventServiceLib\Message\Traits\ArrayEmailTrait;

class PpcRegistrationMessage extends AbstractPpcMessage
{
    use ArrayEmailTrait;

    protected $name;

    protected $registrationDate;

    public function getEventIdentity()
    {
        return 'ppcRegistration';
    }

    public function isValid()
    {
        return !$this->hasEmpty([
            $this->email,
            $this->name,
            $this->registrationDate,
        ]);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * @param mixed $registrationDate
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->registrationDate = $registrationDate instanceof \DateTime ? $registrationDate->format('Y-m-d H:i:s') : $registrationDate;
    }



}