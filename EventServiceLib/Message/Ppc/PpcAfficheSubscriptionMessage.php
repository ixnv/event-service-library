<?php

namespace EventServiceLib\Message\Ppc;

use EventServiceLib\Message\Traits\ArrayEmailTrait;

class PpcAfficheSubscriptionMessage extends AbstractPpcMessage
{
    use ArrayEmailTrait;

    protected $name;

    public function getEventIdentity()
    {
        return 'ppcAfficheSubscription';
    }

    public function isValid()
    {
        return !$this->hasEmpty([
            $this->email,
            $this->name
        ]);
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
     *
     * @return PpcAfficheSubscriptionMessage
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

}