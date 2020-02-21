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
     * @param bool $insist
     * @param string $loginMethod
     * @param null $loginResponse
     * @param string $locale
     * @param int $connectionTimeout
     * @param int $readWriteTimeout
     * @param null $context
     * @param bool $keepalive
     * @param int $heartbeat
     *
     * @return AMQPStreamConnection
     * @throws EventServiceException
     * @throws Exception
     */
    public function createAMQPConnection(
        $host,
        $port,
        $user,
        $password,
        $vHost,
        $insist = false,
        $loginMethod = 'AMQPLAIN',
        $loginResponse = null,
        $locale = 'en_US',
        $connectionTimeout = 3,
        $readWriteTimeout = 3,
        $context = null,
        $keepalive = false,
        $heartbeat = 0
    )
    {
        try {
            $connection = new AMQPStreamConnection(
                $host,
                $port,
                $user,
                $password,
                $vHost,
                $insist,
                $loginMethod,
                $loginResponse,
                $locale,
                $connectionTimeout,
                $readWriteTimeout,
                $context,
                $keepalive,
                $heartbeat
            );
        } catch (Exception $e) {
            $this->handleAMQPException($e);
        }

        return $connection;
    }

    /**
     * @param Exception $e
     *
     * @throws EventServiceException
     * @throws Exception
     */
    private function handleAMQPException(Exception $e)
    {
        if (!$e instanceof AMQPExceptionInterface) {
            throw $e;
        }

        throw new EventServiceException("AMQPException caught!", 500, $e);
    }

}