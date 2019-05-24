<?php

namespace EventServiceLib\Message;

use EventServiceLib\Message\Traits\ArrayEmailTrait;

class TenderNewAgencyMessage extends AbstractMessage
{

    use ArrayEmailTrait;

    /**
     * @return string
     */
    function getEventIdentity()
    {
        return 'tenderNewAgency';
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