<?php

namespace EventServiceLib\Message\Ppc;

use EventServiceLib\Message\Traits\ArrayEmailTrait;

class PpcSpecialProjectSubscriptionMessage extends AbstractPpcMessage
{
    use ArrayEmailTrait;

    /** @var string  $specialProjectName*/
    protected $specialProjectName;

    public function getEventIdentity()
    {
        return 'ppcSpecialProjectSubscription';
    }

    public function isValid()
    {
        return !$this->hasEmpty([
            $this->email,
            $this->specialProjectName
        ]);
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
     *
     * @return PpcSpecialProjectSubscriptionMessage
     */
    public function setSpecialProjectName($specialProjectName)
    {
        $this->specialProjectName = $specialProjectName;

        return $this;
    }

}