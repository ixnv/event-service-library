<?php


namespace Test\Message;


class AgencyUpdateMessageTest extends \PHPUnit_Framework_TestCase
{

    public function testMessageSelfValidationSuccess()
    {
        $message = new \EventServiceLib\Message\AgencyUpdateMessage();

        $message
            ->setName('1')
            ->setEmail('1')
            ->setAgencyNotificationClientId('1')
            ->setAgencyNotificationClientHash('1')
        ;

        $this->assertTrue($message->isValid());

    }

    public function testMessageSelfValidationFail()
    {

        $message = new \EventServiceLib\Message\AgencyUpdateMessage();

        $message
            ->setName('1')
            ->setAgencyNotificationClientId('1')
            ->setAgencyNotificationClientHash('1')
        ;

        $this->assertFalse($message->isValid());

    }

}