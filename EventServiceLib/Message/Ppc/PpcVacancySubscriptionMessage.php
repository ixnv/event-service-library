<?php

namespace EventServiceLib\Message\Ppc;

use EventServiceLib\Message\Traits\ArrayEmailTrait;

final class PpcVacancySubscriptionMessage extends AbstractPpcMessage
{
    const EVENT_IDENTITY = 'ppcVacancySubscription';

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
     * @return PpcVacancySubscriptionMessage
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
