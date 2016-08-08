<?php
/**
 * Created by PhpStorm.
 * User: elama
 * Date: 26.07.16
 * Time: 13:31
 */

namespace Test\eLama;

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

    public function testQueueManagerFetchesMessageFromQueue()
    {
        $connection = Phake::mock(AMQPStreamConnection::class);
        $channel = Phake::mock(AMQPChannel::class);
        Phake::when($connection)->channel->thenReturn($channel);
        Phake::when($channel)->basic_consume->thenReturnCallback(function ($a, $b, $c, $d, $e, $f, $callback) {
            $callback(new AMQPMessage(
                'someMessage',
                ['delivery_mode' => 2]
            ));
        });

        $queueManager = new AMQPQueueManager($connection, $channel);
        $queueManager->openConnection();
        $result = $queueManager->fetchMessage();

        $this->assertEquals('someMessage', $result);
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
