<?php


namespace Test\Message;


use PHPUnit\Framework\TestCase;

class StatusChangeMessageTest extends TestCase
{

    public function testMessageSelfValidationSuccess()
    {
        $message = new \EventServiceLib\Message\StatusChangeMessage();

        $message
            ->setStatus('1')
            ->setName('1')
            ->setEmail('1');

        $this->assertTrue($message->isValid());
    }

    public function testMessageSelfValidationFail()
    {
        $message = new \EventServiceLib\Message\StatusChangeMessage();

        $message
            ->setEmail('1')
            ->setName('1');

        $this->assertFalse($message->isValid());
    }

}