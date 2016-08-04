<?php
/**
 * Created by PhpStorm.
 * User: elama
 * Date: 04.08.16
 * Time: 13:40
 */

namespace EventServiceLib;


interface QueueManagerInterface
{

    public function closeConnection();

    public function openConnection();

    public function fetchMessage();

    public function putMessage($message);

    public function deleteMessage();

}