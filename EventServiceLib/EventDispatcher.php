<?php

namespace EventServiceLib;

use EventServiceLib\Exceptions\EventServiceException;
use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\MessageInterface;

class EventDispatcher implements EventDispatcherInterface
{
    /** @var  QueueManagerInterface */
    private $queueManager;

    public function __construct(QueueManagerInterface $queueManager)
    {
        $this->queueManager = $queueManager;
    }

    /**
     * @param AbstractMessage $message
     *
     * @return bool
     * @throws EventServiceException
     */
    public function dispatchMessage(AbstractMessage $message)
    {
        if (!$this->connectionIsAvailable()) {
            throw new EventServiceException('AMQP connection is not available');
        }

        if (!$message->isValid() || $message->getEventIdentity() === MessageInterface::EVENT_IDENTITY) {
            return false; # TODO: Exception?
        }

        $this->queueManager->openConnection();
        $dispatcherMessage = [
            'version' => EventServiceValues::VERSION,
            'messageClass' => get_class($message),
            'type' => $message->getEventIdentity(),
            'fields' => $message->toArray(),
        ];

        $dispatcherMessage = json_encode($dispatcherMessage);
        $this->queueManager->putMessage($dispatcherMessage);
        $this->queueManager->closeConnection();

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
     * @return mixed
     */
    public function connectionIsAvailable()
    {
        return $this->queueManager->connectionIsAvailable();
    }
}
