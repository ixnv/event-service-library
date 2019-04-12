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
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

}