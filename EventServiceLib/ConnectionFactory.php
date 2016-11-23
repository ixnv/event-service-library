<?php


namespace EventServiceLib;


use Exception;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Exception\AMQPExceptionInterface;
use Psr\Log\LoggerInterface;

class ConnectionFactory
{
    /** @var  LoggerInterface */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }


    /**
     * @param string $host
     * @param int $port
     * @param string $user
     * @param string $password
     * @param string $vHost
     *
     * @return bool|AMQPStreamConnection
     * @throws Exception
     */
    public function createAMQPConnection($host, $port, $user, $password, $vHost)
    {
        try {
            $connection = new AMQPStreamConnection($host, $port, $user, $password, $vHost);
        } catch (Exception $e) {
            $this->handleAMQPException($e);
            $connection = false;
        }

        return $connection;
    }

    /**
     * @param Exception $e
     *
     * @throws Exception
     */
    private function handleAMQPException(Exception $e)
    {
        if (!$e instanceof AMQPExceptionInterface) {
            throw $e;
        }
        $this->logger->critical("AMQPException caught!", [$e]);
    }

}