<?php

namespace EventServiceLib\Message\Optimove;

use EventServiceLib\Message\AbstractMessage;

final class OptimoveAttendedWebinarMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'optimoveAttendedWebinar';

    private $email;
    private $webinarId;
    private $webinarPlatformName;

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->email,
                $this->webinarId,
                $this->webinarPlatformName
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
     * @return OptimoveAttendedWebinarMessage
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebinarId()
    {
        return $this->webinarId;
    }

    /**
     * @param string $webinarId
     * @return OptimoveAttendedWebinarMessage
     */
    public function setWebinarId($webinarId)
    {
        $this->webinarId = $webinarId;
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
     * @return OptimoveAttendedWebinarMessage
     */
    public function setWebinarPlatformName($webinarPlatformName)
    {
        $this->webinarPlatformName = $webinarPlatformName;
        return $this;
    }
}
