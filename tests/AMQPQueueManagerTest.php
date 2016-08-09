<?php


namespace Test;

use EventServiceLib\AMQPQueueManager;
use EventServiceLib\EventServiceValues;
use Phake;
use PhpAmqpLib\Channel\AMQPChannel;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class AMQPQueueManagerTest extends \PHPUnit_Framework_TestCase
{

    public function testQueueManagerPutsMessagesInQueue()
    {
        $connection = Phake::mock(AMQPStreamConnection::class);
        $channel = Phake::mock(AMQPChannel::class);
        Phake::when($connection)->channel->thenReturn($channel);

        $queueManager = new AMQPQueueManager($connection, $channel);
        $queueManager->openConnection();
        $queueManager->putMessage('someMessage');

        $expectedMessage = new AMQPMessage(
            'someMessage',
            ['delivery_mode' => 2]
        );
        Phake::verify($channel)->basic_publish($expectedMessage, '', EventServiceValues::QUEUE_NAME);
    }


    public function testQueueManagerOpensConnection()
    {
        $connection = Phake::mock(AMQPStreamConnection::class);
        $channel = Phake::mock(AMQPChannel::class);
        Phake::when($connection)->channel->thenReturn($channel);
        $queueManager = new AMQPQueueManager($connection);
        $queueManager->openConnection();
        Phake::verify($connection)->channel;
        Phake::verify($channel)->queue_declare;
    }

}
