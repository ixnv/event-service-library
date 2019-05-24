<?php

namespace EventServiceLib\Message;

use EventServiceLib\Message\Traits\ArrayEmailTrait;

class TenderNewClientMessage extends AbstractMessage
{

    use ArrayEmailTrait;

    /**
     * @return string
     */
    function getEventIdentity()
    {
        return 'tenderNewClient';
    }

    /**
     * @return bool
     */
    public function isValid()
    {

        return !$this->hasEmpty([
            $this->email,
        ]);

    }

}