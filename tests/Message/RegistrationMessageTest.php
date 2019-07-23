<?php


namespace Test\Message;


use PHPUnit\Framework\TestCase;

class RegistrationMessageTest extends TestCase
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
            ->setEmail('1');

        $this->assertTrue($message->isValid());
    }

    public function testMessageWithReferrerLinkSelfValidationSuccess()
    {
        $message = new \EventServiceLib\Message\RegistrationMessage();

        $message
            ->setAccountType('advertiser')
            ->setElamaId('1')
            ->setRegistrationDate('1')
            ->setElamaLogin('1')
            ->setName('1')
            ->setEmail('1')
            ->setReferrerLink('a54784f37527d4b7480cdd8d503c80bf');

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
            ->setEmail('1');

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
            ->setEmail('1');

        $this->assertFalse($message->isValid());
    }

}
