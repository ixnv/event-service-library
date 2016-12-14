<?php

namespace EventServiceLib\Message;


class UpdateAmoCrmContactMessage extends RegistrationMessage
{
    /**
     * @return string
     */
    function getEventIdentity()
    {
        return 'updateContact';
    }
}