<?php

namespace EventServiceLib;

interface QueueManagerInterface
{
    public function __construct($connection);

    public function closeConnection();

    public function openConnection();

    public function putMessage($message);

    public function connectionIsAvailable();
}
