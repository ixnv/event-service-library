<?php


namespace EventServiceLib\Message;


use EventServiceLib\Message\Traits\AmoCrmMessageTrait;
use EventServiceLib\Message\Traits\ArrayEmailTrait;
use EventServiceLib\Message\Traits\GetresponseMessageTrait;

class RegistrationMessage extends AbstractMessage
{

    const AMO_ACCOUNT_TYPE_ADVERTISER = 'advertiser'; // Самостоятельный рекламодатель
    const AMO_ACCOUNT_TYPE_AGENCY_CLIENT = 'agency_client'; // Клиент агенства
    const AMO_ACCOUNT_TYPE_AGENCY = 'agency'; // Агенство
    const AMO_ACCOUNT_TYPE_PROXY = 'proxy'; // Посредник
    const AMO_ACCOUNT_TYPE_PROXY_CLIENT = 'proxy_client'; // Клиент посредника
    const AMO_ACCOUNT_TYPE_IO = 'io'; // ИО

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

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty([
            $this->email,
            $this->elamaLogin,
            $this->name,
            $this->registration_date,
            $this->elamaId,
            $this->accountType
        ]) && in_array($this->accountType, [
            self::AMO_ACCOUNT_TYPE_ADVERTISER,
            self::AMO_ACCOUNT_TYPE_AGENCY,
            self::AMO_ACCOUNT_TYPE_AGENCY_CLIENT,
            self::AMO_ACCOUNT_TYPE_PROXY,
            self::AMO_ACCOUNT_TYPE_PROXY_CLIENT,
            self::AMO_ACCOUNT_TYPE_IO
        ]);
    }


}