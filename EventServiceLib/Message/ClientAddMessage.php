<?php


namespace EventServiceLib\Message;


use EventServiceLib\Message\Traits\ArrayEmailTrait;
use EventServiceLib\Message\Traits\GetresponseMessageTrait;

class ClientAddMessage extends AbstractMessage
{

    use GetresponseMessageTrait;
    use ArrayEmailTrait;

    function getEventIdentity()
    {
        return 'clientAdd';
    }


    public function isValid()
    {

        return !$this->hasEmpty([
            $this->email,
            $this->name
        ]);

    }


}