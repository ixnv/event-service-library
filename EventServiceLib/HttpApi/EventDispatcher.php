<?php

namespace EventServiceLib\HttpApi;

use EventServiceLib\EventDispatcherInterface;
use EventServiceLib\EventServiceValues;
use EventServiceLib\Exceptions\EventServiceApiException;
use EventServiceLib\Exceptions\EventServiceException;
use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\MessageInterface;

class EventDispatcher implements EventDispatcherInterface
{
    private $ESApi;

    public function __construct($ESApiUrl, $initiatorServiceName)
    {
        $this->ESApi = new Api($ESApiUrl, $initiatorServiceName);
    }

    /**
     * @param AbstractMessage $message
     *
     * @return bool
     * @throws EventServiceException
     * @throws EventServiceApiException
     */
    public function dispatchMessage(AbstractMessage $message)
    {
        if (!$message->isValid()) {
            return false;
        }

        if (!$this->connectionIsAvailable()) {
            throw new EventServiceException('Event-service API is not available');
        }

        $dispatcherMessage = [
            'version' => EventServiceValues::VERSION,
            'messageClass' => get_class($message),
            'type' => $message->getEventIdentity(),
            'fields' => $message->toArray(),
        ];

        $dispatcherMessage = self::encodeDispatcherMessage($dispatcherMessage);

        $this->ESApi->sendMessage($dispatcherMessage);

        return true;
    }

    /**
     * @param array $dispatcherMessage
     *
     * @return string
     */
    public static function encodeDispatcherMessage(array $dispatcherMessage)
    {
        return json_encode($dispatcherMessage);
    }

    /**
     * @param string $dispatcherMessage
     *
     * @return array
     */
    public static function decodeDispatcherMessage($dispatcherMessage)
    {
        return json_decode($dispatcherMessage, true);
    }

    /**
     * @return bool
     */
    public function connectionIsAvailable()
    {
        return true;
    }
}
