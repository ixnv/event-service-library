<?php


namespace EventServiceLib;


class EventDispatcher
{
    /** @var  QueueManagerInterface */
    private $queueManager;

    public function __construct(QueueManagerInterface $queueManager)
    {
        $this->queueManager = $queueManager;
    }

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

    public function connectionIsAvailable()
    {
        return $this->queueManager->connectionIsAvailable();
    }

}