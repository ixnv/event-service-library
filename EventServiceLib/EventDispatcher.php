<?php
/**
 * Created by PhpStorm.
 * User: elama
 * Date: 04.08.16
 * Time: 14:51
 */

namespace EventServiceLib;


use PhpAmqpLib\Connection\AMQPStreamConnection;

class EventDispatcher
{
    /** @var  QueueManagerInterface */
    private $queueManager;

    public function __construct()
    {
        $connection = new AMQPStreamConnection(
            EventServiceValues::RABBITMQ_NETWORK,
            EventServiceValues::RABBITMQ_PORT,
            EventServiceValues::RABBITMQ_USER,
            EventServiceValues::RABBITMQ_PASSWORD,
            EventServiceValues::RABBITMQ_VHOST
        );
        $this->queueManager = new AMQPQueueManager($connection);
    }

    public function dispatch(EventTypes $type, User $user)
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

}