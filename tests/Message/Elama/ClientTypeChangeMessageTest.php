<?php declare(strict_types=1);

namespace Test\Message\Elama;

use EventServiceLib\Message\Elama\ClientTypeChangeMessage;
use PHPUnit\Framework\TestCase;

class ClientTypeChangeMessageTest extends TestCase
{
    public function testMessageSelfValidationSuccess()
    {
        $message = new ClientTypeChangeMessage();

        $message
            ->setEmail('1')
            ->setElamaId('1')
            ->setCountry('1')
            ->setClientType('1');

        $this->assertTrue($message->isValid());
    }

    public function testMessageSelfValidationFail()
    {
        $message = new ClientTypeChangeMessage();

        $message
            ->setElamaId('1')
            ->setCountry('1')
            ->setClientType('1');

        $this->assertFalse($message->isValid());
    }
}