<?php


namespace EventServiceLib\Message;


use EventServiceLib\Message\Traits\ArrayEmailTrait;
use EventServiceLib\Message\Traits\GetresponseMessageTrait;

class ClientAddMessage extends AbstractMessage
{

    use GetresponseMessageTrait;
    use ArrayEmailTrait;

    /**
     * @return string
     */
    function getEventIdentity()
    {
        return 'clientAdd';
    }

    /**
     * @return bool
     */
    public function isValid()
    {

        return !$this->hasEmpty([
            $this->email,
            $this->name,
        ]);

    }

}