<?php

namespace EventServiceLib\Message\Ppc;

use EventServiceLib\Message\Traits\ArrayEmailTrait;

class PpcAfficheSubscriptionMessage extends AbstractPpcMessage
{
    const EVENT_IDENTITY = 'ppcAfficheSubscription';

    use ArrayEmailTrait;

    protected $name;

    public function getEventIdentity()
    {
        return self::EVENT_IDENTITY;
    }

    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->email,
                $this->name
            ]
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return PpcAfficheSubscriptionMessage
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
