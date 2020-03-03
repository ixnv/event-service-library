<?php

namespace EventServiceLib\Message\Identity;

use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\Traits\AmoCrmMessageTrait;
use EventServiceLib\Message\Traits\ArrayEmailTrait;
use EventServiceLib\Message\Traits\LocalizationTrait;

class ChangeUserInfoMessage extends AbstractMessage
{
    use AmoCrmMessageTrait;
    use ArrayEmailTrait;
    use LocalizationTrait;

    protected $timestamp;
    protected $name;
    protected $userId; // elamaId
    protected $phone;
    protected $accountType;
    protected $timezone;
    protected $splitTestSegment;

    /**
     * @return string
     */
    public function getEventIdentity()
    {
        return 'changeUserInfo';
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
     * @return ChangeUserInfoMessage
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
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
     * @return ChangeUserInfoMessage
     */
    public function setName($name)
    {
        $this->name = $name;

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
     * @return ChangeUserInfoMessage
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     *
     * @return ChangeUserInfoMessage
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     *
     * @return ChangeUserInfoMessage
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;

        return $this;
    }

    /**
     * @return int
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @param int $timezone
     * @return ChangeUserInfoMessage
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
     * @return ChangeUserInfoMessage
     */
    public function setSplitTestSegment($splitTestSegment)
    {
        $this->splitTestSegment = $splitTestSegment;

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
                $this->timestamp,
                $this->userId,
            ])
            && (!$this->accountType || in_array($this->accountType, [
                    ElamaRegistrationMessage::AMO_ACCOUNT_TYPE_ADVERTISER,
                    ElamaRegistrationMessage::AMO_ACCOUNT_TYPE_AGENCY,
                    ElamaRegistrationMessage::AMO_ACCOUNT_TYPE_AGENCY_CLIENT,
                    ElamaRegistrationMessage::AMO_ACCOUNT_TYPE_PROXY,
                    ElamaRegistrationMessage::AMO_ACCOUNT_TYPE_PROXY_CLIENT,
                    ElamaRegistrationMessage::AMO_ACCOUNT_TYPE_IO,
                ], true));
    }
}