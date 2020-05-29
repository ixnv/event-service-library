<?php

namespace EventServiceLib\Message;

use EventServiceLib\Message\Identity\ElamaRegistrationMessage;
use EventServiceLib\Message\Traits\AmoCrmMessageTrait;
use EventServiceLib\Message\Traits\ArrayEmailTrait;
use EventServiceLib\Message\Traits\GetresponseMessageTrait;
use EventServiceLib\Message\Traits\LocalizationTrait;

/**
 * @deprecated
 * @see ElamaRegistrationMessage
 */
class RegistrationMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'registration';

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

    /** @deprecated just use 3 letter country codes */
    const COUNTRY_RU = 'rus';
    /** @deprecated */
    const COUNTRY_KZ = 'kaz';

    protected $registration_date; #TODO: use camelCase
    protected $elamaId;
    protected $phone;
    protected $accountType;
    protected $timezone;
    protected $splitTestSegment;
    protected $referralLink;
    protected $contactSource;
    protected $googleClientId;

    /**
     * @return string
     */
    function getEventIdentity()
    {
        return self::EVENT_IDENTITY;
    }

    /**
     * @return string
     */
    public function getRegistrationDate()
    {
        return $this->registration_date;
    }

    /**
     * @param string $registration_date
     * @return RegistrationMessage
     */
    public function setRegistrationDate($registration_date)
    {
        $this->registration_date = $registration_date;

        return $this;
    }

    /**
     * @return int
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

    /**
     * @param int $elamaId
     * @return RegistrationMessage
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return RegistrationMessage
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     * @return RegistrationMessage
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @param string $timezone
     * @return RegistrationMessage
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
     * @return RegistrationMessage
     */
    public function setContactSource($contactSource)
    {
        $this->contactSource = $contactSource;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getGoogleClientId()
    {
        return $this->googleClientId;
    }

    /**
     * @param string $googleClientId
     * @return RegistrationMessage
     */
    public function setGoogleClientId($googleClientId)
    {
        $this->googleClientId = $googleClientId;

        return $this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
                [
                    $this->email,
                    $this->elamaLogin,
                    $this->country,
                    $this->registration_date,
                    $this->elamaId,
                ]
            )
            && (!$this->accountType || in_array(
                    $this->accountType,
                    [
                        self::AMO_ACCOUNT_TYPE_ADVERTISER,
                        self::AMO_ACCOUNT_TYPE_AGENCY,
                        self::AMO_ACCOUNT_TYPE_AGENCY_CLIENT,
                        self::AMO_ACCOUNT_TYPE_PROXY,
                        self::AMO_ACCOUNT_TYPE_PROXY_CLIENT,
                        self::AMO_ACCOUNT_TYPE_IO,
                    ]
                ));
    }
}
