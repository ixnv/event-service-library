<?php

namespace EventServiceLib\Message\Ppc;

use EventServiceLib\Message\Traits\ArrayEmailTrait;

class PpcSpecialProjectSubscriptionMessage extends AbstractPpcMessage
{
    const EVENT_IDENTITY = 'ppcSpecialProjectSubscription';

    use ArrayEmailTrait;

    /** @var string $specialProjectName */
    protected $specialProjectName;

    public function getEventIdentity()
    {
        return self::EVENT_IDENTITY;
    }

    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->email,
                $this->specialProjectName
            ]
        );
    }

    /**
     * @return string
     */
    public function getSpecialProjectName()
    {
        return $this->specialProjectName;
    }

    /**
     * @param string $specialProjectName
     * @return PpcSpecialProjectSubscriptionMessage
     */
    public function setSpecialProjectName($specialProjectName)
    {
        $this->specialProjectName = $specialProjectName;

        return $this;
    }
}
