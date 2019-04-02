<?php

namespace EventServiceLib\Message;

use EventServiceLib\Message\Traits\AmoCrmMessageTrait;
use EventServiceLib\Message\Traits\ArrayEmailTrait;
use EventServiceLib\Message\Traits\GetresponseMessageTrait;
use EventServiceLib\Message\Traits\LocalizationTrait;

class UpdateAmoCrmContactMessage extends AbstractMessage
{

    use GetresponseMessageTrait;
    use AmoCrmMessageTrait;
    use ArrayEmailTrait;
    use LocalizationTrait;

    protected $registrationDate;
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
        return 'updateContact';
    }

    /**
     * @return mixed
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * @param mixed $registrationDate
     *
     * @return RegistrationMessage
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->registrationDate = $registrationDate;

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
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty([
                $this->email,
                $this->elamaLogin,
                $this->name,
                $this->registrationDate,
                $this->elamaId,
            ])
            && (!$this->accountType || in_array($this->accountType, [
                    RegistrationMessage::AMO_ACCOUNT_TYPE_ADVERTISER,
                    RegistrationMessage::AMO_ACCOUNT_TYPE_AGENCY,
                    RegistrationMessage::AMO_ACCOUNT_TYPE_AGENCY_CLIENT,
                    RegistrationMessage::AMO_ACCOUNT_TYPE_PROXY,
                    RegistrationMessage::AMO_ACCOUNT_TYPE_PROXY_CLIENT,
                    RegistrationMessage::AMO_ACCOUNT_TYPE_IO,
                ]));
    }

}