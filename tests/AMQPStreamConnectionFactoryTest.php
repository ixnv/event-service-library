<?php


namespace Test;


use EventServiceLib\AMQPStreamConnectionFactory;
use Phake;
use Psr\Log\LoggerInterface;

class AMQPStreamConnectionFactoryTest extends \PHPUnit_Framework_TestCase
{
    /** @var  AMQPStreamConnectionFactory */
    private $factory;
    /** @var  LoggerInterface */
    private $logger;

    public function setUp()
    {
        $this->logger = Phake::mock(LoggerInterface::class);
        $this->factory = new AMQPStreamConnectionFactory($this->logger);
    }

    public function testCreateInstanceLogsExceptionAndReturnsFalseWhenParametersAreIncorrect()
    {
        $result = $this->factory->createInstance(null, null, null, null, null);

        Phake::verify($this->logger)->critical;
        $this->assertEquals($result, false);
    }

}
