<?php

namespace EventServiceLib;


interface EventDispatcherInterface
{
    /**
     * @param AbstractMessage $message
     * @return mixed
     */
    public function dispatchMessage(AbstractMessage $message);

    /**
     * @param array $dispatcherMessage
     * @return mixed
     */
    public static function encodeDispatcherMessage(array $dispatcherMessage);

    /**
     * @param $dispatcherMessage
     * @return mixed
     */
    public static function decodeDispatcherMessage($dispatcherMessage);

    /**
     * @return mixed
     */
    public function connectionIsAvailable();
}