<?php


namespace Test;


use EventServiceLib\ConnectionFactory;
use EventServiceLib\Exceptions\EventServiceException;

class ConnectionFactoryTest extends \PHPUnit_Framework_TestCase
{
    /** @var  ConnectionFactory */
    private $factory;

    public function setUp()
    {
        $this->factory = new ConnectionFactory();
    }

    /**
     * @test
     */
    public function testCreateAMQPConnectionLogsExceptionAndReturnsFalseWhenParametersAreIncorrect()
    {
        $this->setExpectedException(EventServiceException::class, 'AMQPException caught!');

        $result = $this->factory->createAMQPConnection(null, null, null, null, null);

        $this->assertEquals($result, false);
    }

}
