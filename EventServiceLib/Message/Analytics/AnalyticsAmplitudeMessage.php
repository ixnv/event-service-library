<?php

namespace EventServiceLib\Message\Analytics;

use EventServiceLib\Message\AbstractMessage;

final class AnalyticsAmplitudeMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'analyticsAmplitude';

    private $userId; // elama user id
    private $toolName;
    private $eventName;
    private $userProperties;
    private $eventProperties;

    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->userId,
                $this->toolName,
                $this->eventName
            ]
        ) && (!empty($this->userProperties) || !empty($this->eventProperties));
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
     * @return AnalyticsAmplitudeMessage
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return string
     */
    public function getToolName()
    {
        return $this->toolName;
    }

    /**
     * @param string $toolName
     * @return AnalyticsAmplitudeMessage
     */
    public function setToolName($toolName)
    {
        $this->toolName = $toolName;
        return $this;
    }

    /**
     * @return string
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * @param string $eventName
     * @return AnalyticsAmplitudeMessage
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
        return $this;
    }

    /**
     * @return array
     */
    public function getUserProperties()
    {
        return $this->userProperties;
    }

    /**
     * @param array $userProperties
     * @return AnalyticsAmplitudeMessage
     */
    public function setUserProperties($userProperties)
    {
        $this->userProperties = $userProperties;
        return $this;
    }

    /**
     * @return array
     */
    public function getEventProperties()
    {
        return $this->eventProperties;
    }

    /**
     * @param array $eventProperties
     * @return AnalyticsAmplitudeMessage
     */
    public function setEventProperties($eventProperties)
    {
        $this->eventProperties = $eventProperties;
        return $this;
    }
}
