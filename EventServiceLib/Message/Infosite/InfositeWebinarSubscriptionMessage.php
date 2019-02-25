<?php declare(strict_types=1);

namespace EventServiceLib\Message\Elama;

use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\ProjectSpecificMessageInterface;
use EventServiceLib\Message\Traits\LocalizationTrait;

class InfositeWebinarSubscriptionMessage extends AbstractMessage implements ProjectSpecificMessageInterface
{

    use LocalizationTrait;

    protected $email;
    protected $webinarType;
    protected $addingDate;

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
        return 'infositeBlogSubscription';
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