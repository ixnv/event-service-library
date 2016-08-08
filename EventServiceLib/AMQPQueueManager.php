<?php


namespace EventServiceLib;


use PhpAmqpLib\Channel\AMQPChannel;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;


class AMQPQueueManager implements QueueManagerInterface
{
    /** @var AMQPStreamConnection */
    private $connection;
    /** @var  int */
    private $queueSize;
    /** @var  AMQPChannel */
    private $channel;
    /** @var  \AMQPQueue */
    private $queue;
    /** @var  AMQPMessage */
    private $currentAMQPMessage;

    /**
     * AMQPQueueManager constructor.
     * @param AMQPStreamConnection $connection
     */
    public function __construct(AMQPStreamConnection $connection)
    {
        $this->connection = $connection;
    }

    public function closeConnection()
    {
        $this->channel->close();
    }

    public function openConnection()
    {
        $this->channel = $this->connection->channel();
        $this->queue = $this->channel->queue_declare(EventServiceValues::QUEUE_NAME, false, false, false, false);
        $this->queueSize = $this->queue[1];
    }

    /**
     * @param $text
     */
    public function putMessage($text)
    {
        $message = new AMQPMessage(
            $text,
            ['delivery_mode' => 2]
        );
        $this->channel->basic_publish($message, '', EventServiceValues::QUEUE_NAME);
    }


}