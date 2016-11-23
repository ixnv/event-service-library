<?php

namespace Test\Message;


class AdvPaymentMessageTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function testMessageSelfValidationSuccess()
    {
        $message = new \EventServiceLib\Message\AdvPaymentMessage();

        $message
            ->setTransferDate('1')
            ->setTransferAmount('1')
            ->setElamaLogin('1')
            ->setAdvPlatform('1')
            ->setEmail('1');

        $this->assertTrue($message->isValid());
    }

    /**
     * @test
     */
    public function testMessageSelfValidationFail()
    {
        $message = new \EventServiceLib\Message\AdvPaymentMessage();

        $message
            ->setTransferDate('1')
            ->setTransferAmount('1')
            ->setElamaLogin('1')
            ->setAdvPlatform('1');

        $this->assertFalse($message->isValid());
    }
}