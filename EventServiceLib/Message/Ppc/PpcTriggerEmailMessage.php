<?php

namespace EventServiceLib\Message\Ppc;

use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\Traits\ArrayEmailTrait;

/**
 * Common event for ppc trigger emails.
 */
class PpcTriggerEmailMessage extends AbstractPpcMessage
{
    use ArrayEmailTrait;

    protected $tags;

    public function getEventIdentity()
    {
        return 'ppcTriggerEmail';
    }

    public function isValid()
    {
        return !$this->hasEmpty([
            $this->email,
        ]);
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
     *
     * @return PpcTriggerEmailMessage
     */
    public function setTags(array $tags)
    {
        $this->tags = $tags;

        return $this;
    }
}