<?php

namespace EventServiceLib\Message;


class UserUpdateMessage extends RegistrationMessage
{
    /**
     * @return string
     */
    function getEventIdentity()
    {
        return 'userUpdate';
    }
}