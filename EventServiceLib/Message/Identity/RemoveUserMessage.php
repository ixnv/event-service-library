<?php

namespace EventServiceLib\Message\Identity;

use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\Traits\LocalizationTrait;

final class RemoveUserMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'removeUser';

    use LocalizationTrait;

    private $timestamp;
    private $userId;
    private $initiatorUserId;
    private $email;
    private $additionalOptions = [];

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->email,
                $this->country,
                $this->userId,
            ]
        );
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
     * @return RemoveUserMessage
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
     * @return RemoveUserMessage
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getInitiatorUserId()
    {
        return $this->initiatorUserId;
    }

    /**
     * @param int $initiatorUserId
     * @return RemoveUserMessage
     */
    public function setInitiatorUserId($initiatorUserId)
    {
        $this->initiatorUserId = $initiatorUserId;
        return $this;
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
     * @return RemoveUserMessage
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return array
     */
    public function getAdditionalOptions()
    {
        return $this->additionalOptions;
    }

    /**
     * @param array $additionalOptions
     * @return RemoveUserMessage
     */
    public function setAdditionalOptions($additionalOptions)
    {
        $this->additionalOptions = $additionalOptions;
        return $this;
    }
}
