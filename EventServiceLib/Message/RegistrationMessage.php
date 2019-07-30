<?php

namespace EventServiceLib\Message;

use EventServiceLib\Message\Traits\AmoCrmMessageTrait;
use EventServiceLib\Message\Traits\ArrayEmailTrait;
use EventServiceLib\Message\Traits\GetresponseMessageTrait;
use EventServiceLib\Message\Traits\LocalizationTrait;

class RegistrationMessage extends AbstractMessage
{

    use GetresponseMessageTrait;
    use AmoCrmMessageTrait;
    use ArrayEmailTrait;
    use LocalizationTrait;

    const AMO_ACCOUNT_TYPE_ADVERTISER = 'advertiser'; // Самостоятельный рекламодатель
    const AMO_ACCOUNT_TYPE_AGENCY_CLIENT = 'agency_client'; // Клиент агенства
    const AMO_ACCOUNT_TYPE_AGENCY = 'agency'; // Агенство
    const AMO_ACCOUNT_TYPE_PROXY = 'proxy'; // Посредник
    const AMO_ACCOUNT_TYPE_PROXY_CLIENT = 'proxy_client'; // Клиент посредника
    const AMO_ACCOUNT_TYPE_IO = 'io'; // ИО

    # источник регистрации (form_id), по умолчанию(значение null) - Регистрация на сайте
    const CONTACT_SOURCE_COURSE_PAGE = 'course_page'; // Регистрация на сайте (Курс по теории)

    /** @deprecated just use 3 letter country codes  */
    const COUNTRY_RU = 'rus';
    /** @deprecated  */
    const COUNTRY_KZ = 'kaz';

    protected $registration_date; #TODO: use camelCase
    protected $elamaId;
    protected $phone;
    protected $accountType;
    protected $timezone;
    protected $splitTestSegment = null;
    protected $referralLink = null;
    protected $contactSource;

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
     * @return string|null
     */
    public function getSplitTestSegment()
    {
        return $this->splitTestSegment;
    }

    /**
     * @param string $splitTestSegment
     * @return RegistrationMessage
     */
    public function setSplitTestSegment($splitTestSegment)
    {
        $this->splitTestSegment = $splitTestSegment;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReferralLink()
    {
        return $this->referralLink;
    }

    /**
     * @param string $referralLink
     *
     * @return RegistrationMessage
     */
    public function setReferralLink($referralLink)
    {
        $this->referralLink = $referralLink;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getContactSource()
    {
        return $this->contactSource;
    }

    /**
     * @param string $contactSource
     *
     * @return RegistrationMessage
     */
    public function setContactSource($contactSource)
    {
        $this->contactSource = $contactSource;

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
                ]));
    }

}
