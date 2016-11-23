<?php


namespace Test;


use EventServiceLib\ConnectionFactory;
use Phake;
use Psr\Log\LoggerInterface;

class ConnectionFactoryTest extends \PHPUnit_Framework_TestCase
{
    /** @var  ConnectionFactory */
    private $factory;
    /** @var  LoggerInterface | \Phake_IMock */
    private $logger;

    public function setUp()
    {
        $this->logger  = Phake::mock(LoggerInterface::class);
        $this->factory = new ConnectionFactory($this->logger);
    }

    /**
     * @test
     */
    public function testCreateAMQPConnectionLogsExceptionAndReturnsFalseWhenParametersAreIncorrect()
    {
        $result = $this->factory->createAMQPConnection(null, null, null, null, null);

        Phake::verify($this->logger)->critical;
        $this->assertEquals($result, false);
    }

}
