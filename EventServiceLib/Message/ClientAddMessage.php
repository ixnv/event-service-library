<?php


namespace EventServiceLib\Message;


class ClientAddMessage extends AbstractMessage
{
    function getEventIdentity()
    {
        return 'clientAdd';
    }

}