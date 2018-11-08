<?php


namespace Test\Message;


use PHPUnit\Framework\TestCase;

class ClientAddMessageTest extends TestCase
{

    public function testMessageSelfValidationSuccess()
    {
        $message = new \EventServiceLib\Message\ClientAddMessage();

        $message
            ->setName('1')
            ->setEmail('1');

        $this->assertTrue($message->isValid());
    }

    public function testMessageSelfValidationFail()
    {
        $message = new \EventServiceLib\Message\ClientAddMessage();

        $message
            ->setEmail('1');

        $this->assertFalse($message->isValid());
    }

}