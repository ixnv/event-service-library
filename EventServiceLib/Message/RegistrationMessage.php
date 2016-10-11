<?php


namespace EventServiceLib\Message;


class RegistrationMessage extends AbstractMessage
{

    protected $registration_date;

    function getEventIdentity()
    {
        return 'registration';
    }

    /**
     * @return mixed
     */
    public function getRegistrationDate()
    {
        return $this->registration_date;
    }

    /**
     * @param mixed $registration_date
     * @return RegistrationMessage
     */
    public function setRegistrationDate($registration_date)
    {
        $this->registration_date = $registration_date;
        return $this;
    }


    function isValid()
    {
        return parent::isValid() && !empty($this->registration_date);
    }


}