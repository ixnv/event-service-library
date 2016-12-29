<?php

namespace EventServiceLib\Message\Ppc;


use EventServiceLib\Message\Traits\ArrayEmailTrait;

class PpcSubscriptionMessage extends AbstractPpcMessage
{
    use ArrayEmailTrait;

    protected $name;

    public function getEventIdentity()
    {
        return 'ppcSubscription';
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
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}