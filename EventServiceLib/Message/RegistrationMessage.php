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

    const COUNTRY_RU = 'ru';
    const COUNTRY_KZ = 'kz';

    use GetresponseMessageTrait;
    use AmoCrmMessageTrait;
    use ArrayEmailTrait;

    protected $registration_date; #TODO: use camelCase
    protected $elamaId;
    protected $phone;
    protected $accountType;
    protected $timezone;
    protected $country;

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string
     */
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
     *
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
     * @param $elamaId
     *
     * @return RegistrationMessage
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param $phone
     *
     * @return RegistrationMessage
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * @param $accountType
     *
     * @return RegistrationMessage
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @param $timezone
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
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
                ])
                && (!$this->accountType || in_array($this->accountType, [
                    self::AMO_ACCOUNT_TYPE_ADVERTISER,
                    self::AMO_ACCOUNT_TYPE_AGENCY,
                    self::AMO_ACCOUNT_TYPE_AGENCY_CLIENT,
                    self::AMO_ACCOUNT_TYPE_PROXY,
                    self::AMO_ACCOUNT_TYPE_PROXY_CLIENT,
                    self::AMO_ACCOUNT_TYPE_IO,
                ]))
                && (!$this->country || in_array($this->country, [
                    self::COUNTRY_RU,
                    self::COUNTRY_KZ
                ]))
            ;
    }

}