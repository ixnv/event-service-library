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
            return false;
        }

        $this->queueManager->openConnection();
        $message = [
            'version' => EventServiceValues::VERSION,
            'type' => get_class($message),
            'message' => $message->toArray()
        ];
        $message = json_encode($message);
        $this->queueManager->putMessage($message);
        $this->queueManager->closeConnection();

        return true;
    }


    public function connectionIsAvailable()
    {
        return $this->queueManager->connectionIsAvailable();
    }

}