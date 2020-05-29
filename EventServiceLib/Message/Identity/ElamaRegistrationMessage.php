<?php

namespace EventServiceLib\Message\Identity;

use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\Traits\AmoCrmMessageTrait;
use EventServiceLib\Message\Traits\ArrayEmailTrait;
use EventServiceLib\Message\Traits\GetresponseMessageTrait;
use EventServiceLib\Message\Traits\LocalizationTrait;

class ElamaRegistrationMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'elamaRegistration';

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

    protected $timestamp;
    protected $userId; // elamaId
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
    public function getEventIdentity()
    {
        return self::EVENT_IDENTITY;
    }

    /**
     * @return int
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param int $timestamp
     * @return ElamaRegistrationMessage
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     *
     * @return ElamaRegistrationMessage
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

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
     *
     * @return ElamaRegistrationMessage
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
     *
     * @return ElamaRegistrationMessage
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
     * @return ElamaRegistrationMessage
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
     * @return ElamaRegistrationMessage
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
     * @return ElamaRegistrationMessage
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
     *
     * @return ElamaRegistrationMessage
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
                    $this->timestamp,
                    $this->userId,
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
                    ],
                    true
                ));
    }
}
