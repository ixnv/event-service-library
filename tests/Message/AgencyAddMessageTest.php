<?php


namespace Test\Message;


class AgencyAddMessageTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function testMessageSelfValidationSuccess()
    {
        $message = new \EventServiceLib\Message\AgencyAddMessage();

        $message
            ->setStatus('1')
            ->setName('1')
            ->setEmail('1');

        $this->assertTrue($message->isValid());
    }

    /**
     * @test
     */
    public function testMessageSelfValidationFail()
    {
        $message = new \EventServiceLib\Message\AgencyAddMessage();

        $message
            ->setName('1')
            ->setEmail('1');

        $this->assertFalse($message->isValid());
    }

}