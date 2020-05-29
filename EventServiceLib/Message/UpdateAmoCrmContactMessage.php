<?php

namespace EventServiceLib\Message;

use EventServiceLib\Message\Traits\AmoCrmMessageTrait;
use EventServiceLib\Message\Traits\ArrayEmailTrait;
use EventServiceLib\Message\Traits\GetresponseMessageTrait;
use EventServiceLib\Message\Traits\LocalizationTrait;

/**
 * @deprecated
 * @see ChangeUserInfoMessage
 */
class UpdateAmoCrmContactMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'updateContact';

    use GetresponseMessageTrait;
    use AmoCrmMessageTrait;
    use ArrayEmailTrait;
    use LocalizationTrait;

    protected $registration_date;
    protected $elamaId;
    protected $phone;
    protected $accountType;
    protected $timezone;
    protected $splitTestSegment = null;

    /**
     * @return string
     */
    public function getEventIdentity()
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
     * @return UpdateAmoCrmContactMessage
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
     * @return UpdateAmoCrmContactMessage
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
     * @return UpdateAmoCrmContactMessage
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
     * @return UpdateAmoCrmContactMessage
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;

        return $this;
    }

    /**
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @param string $timezone
     * @return UpdateAmoCrmContactMessage
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
     * @return UpdateAmoCrmContactMessage
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
        return !$this->hasEmpty(
                [
                    $this->email,
                    $this->elamaLogin,
                    $this->name,
                    $this->registration_date,
                    $this->elamaId,
                ]
            )
            && (!$this->accountType || in_array(
                    $this->accountType,
                    [
                        RegistrationMessage::AMO_ACCOUNT_TYPE_ADVERTISER,
                        RegistrationMessage::AMO_ACCOUNT_TYPE_AGENCY,
                        RegistrationMessage::AMO_ACCOUNT_TYPE_AGENCY_CLIENT,
                        RegistrationMessage::AMO_ACCOUNT_TYPE_PROXY,
                        RegistrationMessage::AMO_ACCOUNT_TYPE_PROXY_CLIENT,
                        RegistrationMessage::AMO_ACCOUNT_TYPE_IO,
                    ]
                ));
    }
}
