<?php


namespace Test;


use EventServiceLib\ConnectionFactory;
use EventServiceLib\Exceptions\EventServiceException;
use PHPUnit\Framework\TestCase;

class ConnectionFactoryTest extends TestCase
{
    /** @var  ConnectionFactory */
    private $factory;

    public function setUp()
    {
        $this->factory = new ConnectionFactory();
    }

    public function testCreateAMQPConnectionLogsExceptionAndReturnsFalseWhenParametersAreIncorrect()
    {
        $this->expectException(EventServiceException::class);
        $this->expectExceptionMessage('AMQPException caught!');

        $result = $this->factory->createAMQPConnection(null, null, null, null, null);

        $this->assertEquals($result, false);
    }

}
