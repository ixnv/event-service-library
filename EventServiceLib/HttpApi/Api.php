<?php

namespace EventServiceLib\HttpApi;

use EventServiceLib\Exceptions\EventServiceApiException;

class Api
{
    private $ESApiUrl;
    private $initiatorServiceName;

    /**
     * @param string $ESApiUrl
     * @param string $initiatorServiceName
     */
    public function __construct($ESApiUrl, $initiatorServiceName)
    {
        $this->ESApiUrl = $ESApiUrl;
        $this->initiatorServiceName = $initiatorServiceName;
    }

    /**
     * @param string $link
     * @param string $encodedMessage
     */
    public function callApi($link, $encodedMessage = null)
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

        if ($code >= 200 && $code < 300) {
            return $out;
        }

        throw new EventServiceApiException(
            $code,
            $out,
            'Event-service API is not available'
        );
    }

    /**
     * @return bool
     */
    public function ping()
    {
        try {
            $this->callApi(rtrim($this->ESApiUrl, '/') . '/api/ping');
        } catch (\Exception $exception) {
            return false;
        }

        return true;
    }

    public function sendMessage($encodedMessage)
    {
        return $this->callApi(rtrim($this->ESApiUrl, '/') . '/api/message', $encodedMessage);
    }
}
