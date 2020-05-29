<?php

namespace EventServiceLib\Message;

interface MessageInterface
{
    const EVENT_IDENTITY = 'undef';

    public function toArray();

    public function isValid();

    public function getEventIdentity();

    public function getOrphanFields();

    public function getMessageUniqId();
}
