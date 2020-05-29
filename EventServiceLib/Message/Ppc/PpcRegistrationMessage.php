<?php

namespace EventServiceLib\Message\Ppc;

use EventServiceLib\Message\Traits\ArrayEmailTrait;

class PpcRegistrationMessage extends AbstractPpcMessage
{
    const EVENT_IDENTITY = 'ppcRegistration';

    use ArrayEmailTrait;

    protected $name;
    protected $surname;
    protected $registrationDate;

    public function getEventIdentity()
    {
        return self::EVENT_IDENTITY;
    }

    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->email,
                $this->name,
                $this->surname,
                $this->registrationDate,
            ]
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return PpcRegistrationMessage
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     * @return PpcRegistrationMessage
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * @return string
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * @param string $registrationDate
     * @return PpcRegistrationMessage
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->registrationDate = $registrationDate instanceof \DateTime ? $registrationDate->format(
            'Y-m-d H:i:s'
        ) : $registrationDate;

        return $this;
    }
}
