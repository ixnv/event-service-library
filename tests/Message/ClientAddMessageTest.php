<?php


namespace Test\Message;


class ClientAddMessageTest extends \PHPUnit_Framework_TestCase
{

    public function testMessageSelfValidationSuccess()
    {
        $message = new \EventServiceLib\Message\ClientAddMessage();

        $message
            ->setName('1')
            ->setEmail('1')
        ;

        $this->assertTrue($message->isValid());

    }

    public function testMessageSelfValidationFail()
    {

        $message = new \EventServiceLib\Message\ClientAddMessage();

        $message
            ->setEmail('1')
        ;

        $this->assertFalse($message->isValid());

    }

}