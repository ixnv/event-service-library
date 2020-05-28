<?php

namespace EventServiceLib;

use EventServiceLib\Exceptions\EventServiceException;
use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\ProjectSpecificMessageInterface;

class EventDispatcherByApi implements EventDispatcherInterface
{
    private $EShost;
    private $initiatorServiceName;

    public function __construct($EShost, $initiatorServiceName)
    {
        $this->EShost = $EShost;
        $this->initiatorServiceName = $initiatorServiceName;
    }

    /**
     * @param string $link
     * @param string $encodedMessage
     */
    public function sendRequest($link, $encodedMessage = null)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_USERAGENT, 'ESlib-API-client/1.0');
        curl_setopt($curl, CURLOPT_URL, $link);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);

        if ($encodedMessage) {
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $encodedMessage);
            curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        }

        $out = curl_exec($curl);
        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        if ($code>=200 && $code<300) {
            return $out;
        }

        throw new EventServiceException('Event-service API is not available');
    }

    /**
     * @param AbstractMessage $message
     *
     * @return bool
     * @throws EventServiceException
     */
    public function dispatchMessage(AbstractMessage $message)
    {
        if (!$message->isValid()) {
            return false;
        }

        if (!$this->connectionIsAvailable()) {
            throw new EventServiceException('Event-service API is not available');
        }

        $dispatcherMessage = [
            'version' => EventServiceValues::VERSION,
            'messageClass' => get_class($message),
            'type' => $message->getEventIdentity(),
            'fields' => $message->toArray(),
        ];

        if ($message instanceof ProjectSpecificMessageInterface) {
            $dispatcherMessage['project'] = $message->getProjectIdentity();
        }

        $dispatcherMessage = self::encodeDispatcherMessage($dispatcherMessage);

        $this->apiSendMessage($dispatcherMessage);

        return true;
    }

    public function apiPing()
    {
//        $this->sendRequest($this->EShost.'/ping'); // TODO host
        return true;
    }

    public function apiSendMessage($encodedMessage)
    {
        $this->sendRequest($this->EShost.'/message', $encodedMessage); // TODD host
    }

    /**
     * @param array $dispatcherMessage
     *
     * @return string
     */
    public static function encodeDispatcherMessage(array $dispatcherMessage)
    {
        return json_encode($dispatcherMessage);
    }

    /**
     * @param string $dispatcherMessage
     *
     * @return array
     */
    public static function decodeDispatcherMessage($dispatcherMessage)
    {
        return json_decode($dispatcherMessage, true);
    }

    /**
     * @return mixed
     */
    public function connectionIsAvailable()
    {
        return $this->apiPing(); // TODO а надо ли?
    }
}
