<?php

namespace EventServiceLib\Message\Ppc;

use EventServiceLib\Message\Traits\ArrayEmailTrait;

final class PpcAfficheSubscriptionMessage extends AbstractPpcMessage
{
    const EVENT_IDENTITY = 'ppcAfficheSubscription';

    use ArrayEmailTrait;

    private $name;

    /**
     * @return bool
     */
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
