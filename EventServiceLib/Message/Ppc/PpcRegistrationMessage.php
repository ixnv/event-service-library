<?php

namespace EventServiceLib\Message\Ppc;


use EventServiceLib\Message\Traits\ArrayEmailTrait;

class PpcRegistrationMessage extends AbstractPpcMessage
{
    use ArrayEmailTrait;

    protected $name;
    protected $surName;

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
            $this->surName,
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
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSurName()
    {
        return $this->surName;
    }

    /**
     * @param $surName
     * @return $this
     */
    public function setSurName($surName)
    {
        $this->surName = $surName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * @param $registrationDate
     * @return $this
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->registrationDate = $registrationDate instanceof \DateTime ? $registrationDate->format('Y-m-d H:i:s') : $registrationDate;
        return $this;
    }



}