<?php declare(strict_types=1);

namespace EventServiceLib\Message\Infosite;

use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\ProjectSpecificMessageInterface;
use EventServiceLib\Message\Traits\LocalizationTrait;

class InfositeWebinarSubscriptionMessage extends AbstractMessage implements ProjectSpecificMessageInterface
{

    use LocalizationTrait;

    protected $webinarName;
    protected $phone;
    protected $email;
    protected $webinarType;
    protected $addingDate;
    protected $startDateTime;

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
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
     *
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
     *
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
     *
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
     *
     * @return InfositeWebinarSubscriptionMessage
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty([
                $this->email,
                $this->webinarType,
                $this->addingDate,
                $this->locale,
            ]);
    }

    /**
     * @return string
     */
    function getEventIdentity()
    {
        return 'infositeWebinarSubscription';
    }

    /**
     * @return string
     */
    public function getProjectIdentity()
    {
        return 'Infosite';
    }

    /**
     * @return string
     */
    public function getProjectPossession()
    {
        return 'Infosite';
    }

}