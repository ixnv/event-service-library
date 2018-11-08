<?php

namespace Test\Message;


use PHPUnit\Framework\TestCase;

class AdvPaymentMessageTest extends TestCase
{

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