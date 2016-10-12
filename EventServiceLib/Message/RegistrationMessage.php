<?php


namespace EventServiceLib\Message;


use EventServiceLib\Message\Traits\AmoCrmMessageTrait;
use EventServiceLib\Message\Traits\ArrayEmailTrait;
use EventServiceLib\Message\Traits\GetresponseMessageTrait;

class RegistrationMessage extends AbstractMessage
{

    use GetresponseMessageTrait;
    use AmoCrmMessageTrait;
    use ArrayEmailTrait;

    protected $registration_date; #TODO: use camelCase
    protected $elamaId;
    protected $phone;
    protected $accountType;

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

    /**
     * @return mixed
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

    /**
     * @param mixed $elamaId
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * @param mixed $accountType
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
    }


    function isValid()
    {
        return parent::isValid() && !empty($this->registration_date) && !empty($this->elamaId) && !empty($this->accountType);
    }


}