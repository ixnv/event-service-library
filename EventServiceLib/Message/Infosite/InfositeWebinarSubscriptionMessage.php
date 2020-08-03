<?php

namespace EventServiceLib\Message\Infosite;

use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\Traits\LocalizationTrait;

final class InfositeWebinarSubscriptionMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'infositeWebinarSubscription';

    use LocalizationTrait;

    private $phone;
    private $email;
    private $webinarType;
    private $webinarName;
    private $webinarExternalId;
    private $webinarLevel;
    private $webinarPlatformName;
    private $budget; // Я не запускаю рекламу, До 20 000 руб., От 20 000 до 50 000 руб., От 50 000 до 100 000 руб., Более 100 000 руб.
    private $subscriberName;
    private $addingDate;
    private $startDateTime;
    private $formData;

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->email,
                $this->webinarType,
                $this->addingDate,
                $this->locale,
            ]
        );
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return InfositeWebinarSubscriptionMessage
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebinarType()
    {
        return $this->webinarType;
    }

    /**
     * @param string $webinarType
     * @return InfositeWebinarSubscriptionMessage
     */
    public function setWebinarType($webinarType)
    {
        $this->webinarType = $webinarType;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddingDate()
    {
        return $this->addingDate;
    }

    /**
     * @param string $addingDate - date string in "Y-m-d" format
     * @return InfositeWebinarSubscriptionMessage
     */
    public function setAddingDate($addingDate)
    {
        $this->addingDate = $addingDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDateTime()
    {
        return $this->startDateTime;
    }

    /**
     * @param string $startDateTime
     * @return InfositeWebinarSubscriptionMessage
     */
    public function setStartDateTime($startDateTime)
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebinarName()
    {
        return $this->webinarName;
    }

    /**
     * @param string $webinarName
     * @return InfositeWebinarSubscriptionMessage
     */
    public function setWebinarName($webinarName)
    {
        $this->webinarName = $webinarName;
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
     * @return InfositeWebinarSubscriptionMessage
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return array
     */
    public function getFormData()
    {
        return $this->formData;
    }

    /**
     * @param array $formData
     * @return InfositeWebinarSubscriptionMessage
     */
    public function setFormData($formData)
    {
        $this->formData = $formData;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubscriberName()
    {
        return $this->subscriberName;
    }

    /**
     * @param string $subscriberName
     * @return InfositeWebinarSubscriptionMessage
     */
    public function setSubscriberName($subscriberName)
    {
        $this->subscriberName = $subscriberName;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebinarExternalId()
    {
        return $this->webinarExternalId;
    }

    /**
     * @param string $webinarExternalId
     * @return InfositeWebinarSubscriptionMessage
     */
    public function setWebinarExternalId($webinarExternalId)
    {
        $this->webinarExternalId = $webinarExternalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebinarLevel()
    {
        return $this->webinarLevel;
    }

    /**
     * @param string $webinarLevel
     * @return InfositeWebinarSubscriptionMessage
     */
    public function setWebinarLevel($webinarLevel)
    {
        $this->webinarLevel = $webinarLevel;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebinarPlatformName()
    {
        return $this->webinarPlatformName;
    }

    /**
     * @param string $webinarPlatformName
     * @return InfositeWebinarSubscriptionMessage
     */
    public function setWebinarPlatformName($webinarPlatformName)
    {
        $this->webinarPlatformName = $webinarPlatformName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * @param string $budget
     * @return InfositeWebinarSubscriptionMessage
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;
        return $this;
    }
}
