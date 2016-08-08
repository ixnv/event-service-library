<?php


namespace EventServiceLib;


interface QueueManagerInterface
{

    public function closeConnection();

    public function openConnection();

    public function fetchMessage();

    public function putMessage($message);

    public function deleteMessage();

}