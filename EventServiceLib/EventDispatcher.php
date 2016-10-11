<?php


namespace EventServiceLib;


use EventServiceLib\Message\AbstractMessage;

class EventDispatcher
{
    /** @var  QueueManagerInterface */
    private $queueManager;

    public function __construct(QueueManagerInterface $queueManager)
    {
        $this->queueManager = $queueManager;
    }


    /**
     * @deprecated @see dispatchMessage
     * @param $type
     * @param User $user
     */
    public function dispatch($type, User $user)
    {
        $this->queueManager->openConnection();
        $message = [
            'type' => $type,
            'fields' => $user->toArray()
        ];
        $message = json_encode($message);
        $this->queueManager->putMessage($message);
        $this->queueManager->closeConnection();
    }

    /**
     * @param AbstractMessage $message
     * @return bool
     */
    public function dispatchMessage(AbstractMessage $message)
    {
        if (!$message->isValid()) {
            return false; # TODO: hum!
        }

        $this->queueManager->openConnection();
        $dispatcherMessage = [
            'version' => EventServiceValues::VERSION,
            'messageClass' => get_class($message),
            'type' => $message->getEventIdentity(),
            'fields' => $message->toArray()
        ];
        $dispatcherMessage = json_encode($dispatcherMessage);
        $this->queueManager->putMessage($dispatcherMessage);
        $this->queueManager->closeConnection();

        return true;
    }


    /**
     * @param array $dispatcherMessage
     * @return string
     */
    public static function encodeDispatcherMessage(array $dispatcherMessage)
    {
        return json_encode($dispatcherMessage);
    }


    /**
     * @param array $dispatcherMessage
     * @return string
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