<?php


namespace EventServiceLib;


interface QueueManagerInterface
{

    public function closeConnection();

    public function openConnection();

    public function putMessage($message);

    public function connectionIsAvailable();


}