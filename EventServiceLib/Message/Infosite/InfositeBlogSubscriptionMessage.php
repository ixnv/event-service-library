<?php declare(strict_types=1);

namespace EventServiceLib\Message\Elama;

use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\ProjectSpecificMessageInterface;
use EventServiceLib\Message\Traits\LocalizationTrait;

class InfositeBlogSubscriptionMessage extends AbstractMessage implements ProjectSpecificMessageInterface
{

    use LocalizationTrait;

    protected $email;
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
     * @return InfositeBlogSubscriptionMessage
     */
    public function setEmail($email)
    {
        $this->email = $email;

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
     * @return InfositeBlogSubscriptionMessage
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