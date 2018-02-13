<?php


namespace EventServiceLib;


use EventServiceLib\Exceptions\EventServiceException;
use Exception;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Exception\AMQPExceptionInterface;

class ConnectionFactory
{
    /**
     * @param string $host
     * @param int $port
     * @param string $user
     * @param string $password
     * @param string $vHost
     *
     * @return AMQPStreamConnection
     * @throws Exception
     */
    public function createAMQPConnection($host, $port, $user, $password, $vHost)
    {
        try {
            $connection = new AMQPStreamConnection($host, $port, $user, $password, $vHost);
        } catch (Exception $e) {
            $this->handleAMQPException($e);
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

        throw new EventServiceException("AMQPException caught!");
    }

}