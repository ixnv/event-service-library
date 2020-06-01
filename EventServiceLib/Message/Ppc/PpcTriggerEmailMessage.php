<?php

namespace EventServiceLib\Message\Ppc;

use EventServiceLib\Message\Traits\ArrayEmailTrait;

/**
 * Common event for ppc trigger emails.
 */
final class PpcTriggerEmailMessage extends AbstractPpcMessage
{
    const EVENT_IDENTITY = 'ppcTriggerEmail';

    use ArrayEmailTrait;

    private $tags;

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->email,
            ]
        );
    }

    /**
     * @return string[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param string[] $tags
     * @return PpcTriggerEmailMessage
     */
    public function setTags(array $tags)
    {
        $this->tags = $tags;
        return $this;
    }
}
