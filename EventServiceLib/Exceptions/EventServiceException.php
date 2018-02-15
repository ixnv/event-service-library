<?php

namespace EventServiceLib\Exceptions;

class EventServiceException extends \Exception
{

    public function __construct($message = '', $code = 500, \Throwable $previous = null)
    {
        if (!$message) {
            $message = 'Event Service Exception';
        }

        parent::__construct($message, $code, $previous);
    }

}