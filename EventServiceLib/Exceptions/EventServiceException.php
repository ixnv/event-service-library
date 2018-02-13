<?php

namespace EventServiceLib\Exceptions;

class EventServiceException extends \Exception
{

    public function __construct($message = '', $code = 500)
    {
        $this->code = $code;
        $this->message = $message;
    }

}