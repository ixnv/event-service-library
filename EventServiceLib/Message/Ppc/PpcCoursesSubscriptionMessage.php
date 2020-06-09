<?php

namespace EventServiceLib\Message\Ppc;

use EventServiceLib\Message\Traits\ArrayEmailTrait;

final class PpcCoursesSubscriptionMessage extends AbstractPpcMessage
{
    const EVENT_IDENTITY = 'ppcCoursesSubscription';

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
     * @return PpcCoursesSubscriptionMessage
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

}
