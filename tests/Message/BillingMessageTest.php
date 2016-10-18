<?php


namespace Test\Message;


class BillingMessageTest extends \PHPUnit_Framework_TestCase
{

    public function testMessageSelfValidationSuccess()
    {
        $message = new \EventServiceLib\Message\BillingMessage();

        $message
            ->setPurchaseDate('1')
            ->setElamaLogin('1')
            ->setName('1')
            ->setEmail('1')
        ;

        $this->assertTrue($message->isValid());

    }

    public function testMessageSelfValidationFail()
    {

        $message = new \EventServiceLib\Message\BillingMessage();

        $message
            ->setPurchaseDate('1')
            ->setElamaLogin('1')
            ->setEmail('1')
        ;

        $this->assertFalse($message->isValid());

    }

}