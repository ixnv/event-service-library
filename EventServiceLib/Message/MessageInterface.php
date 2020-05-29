<?php

namespace EventServiceLib\Message;

interface MessageInterface
{
    public function toArray();

    public function isValid();

    public function getEventIdentity();

    public function getOrphanFields();

    public function getMessageUniqId();
}
