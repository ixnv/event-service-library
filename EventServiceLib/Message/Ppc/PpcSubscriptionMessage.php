<?php

namespace EventServiceLib\Message\Ppc;

use EventServiceLib\Message\Traits\ArrayEmailTrait;

final class PpcSubscriptionMessage extends AbstractPpcMessage
{
    const EVENT_IDENTITY = 'ppcSubscription';

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
     * @return PpcSubscriptionMessage
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
