<?php


namespace Test\Message;



class RegistrationMessageTest extends \PHPUnit_Framework_TestCase
{

    public function testMessageSelfValidationSuccess()
    {
        $message = new \EventServiceLib\Message\RegistrationMessage();

        $message
            ->setAccountType('advertiser')
            ->setElamaId('1')
            ->setRegistrationDate('1')
            ->setElamaLogin('1')
            ->setName('1')
            ->setEmail('1')
        ;

        $this->assertTrue($message->isValid());

    }

    public function testMessageSelfValidationFail()
    {

        $message = new \EventServiceLib\Message\RegistrationMessage();

        $message
            ->setAccountType('advertiser')
            ->setRegistrationDate('1')
            ->setElamaLogin('1')
            ->setName('1')
            ->setEmail('1')
        ;

        $this->assertFalse($message->isValid());

    }


    public function testMessageSelfValidationWithInvalidType()
    {

        $message = new \EventServiceLib\Message\RegistrationMessage();

        $message
            ->setAccountType('1')
            ->setRegistrationDate('1')
            ->setElamaLogin('1')
            ->setName('1')
            ->setEmail('1')
        ;

        $this->assertFalse($message->isValid());

    }

}