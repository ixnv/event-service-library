<?php

namespace EventServiceLib\Message;

interface MessageInterface
{
    public function fromArray(array $messageFields);

    public function toArray();

    public function isValid();

    public function getEventIdentity();

    public function getOrphanFields();

    public function getMessageUniqId();
}
