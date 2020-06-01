<?php

namespace EventServiceLib\Exceptions;

class EventServiceApiException extends \Exception
{
    /** @var string */
    private $responseHttpCode;
    /** @var string */
    private $responseBody;

    /**
     * @param $responseHttpCode
     * @param $responseBody
     * @param string $message
     * @param int $code
     */
    public function __construct($responseHttpCode, $responseBody, $message = '', $code = 500)
    {
        if (!$message) {
            $message = 'Event Service Exception';
        }

        $this->responseBody = $responseBody;
        $this->responseHttpCode = $responseHttpCode;

        parent::__construct($message, $code, null);
    }

    /**
     * @return string
     */
    public function getResponseHttpCode()
    {
        return $this->responseHttpCode;
    }

    /**
     * @return string
     */
    public function getResponseBody()
    {
        return $this->responseBody;
    }
}
