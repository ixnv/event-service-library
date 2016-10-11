<?php


namespace EventServiceLib\Message;


class AgencyUpdateMessage extends AbstractMessage
{

    private $agencyNotificationClientId;
    private $agencyNotificationClientHash;

    function getEventIdentity()
    {
        return 'agencyUpdate';
    }

    /**
     * @return mixed
     */
    public function getAgencyNotificationClientId()
    {
        return $this->agencyNotificationClientId;
    }

    /**
     * @param mixed $agencyNotificationClientId
     * @return AgencyUpdateMessage
     */
    public function setAgencyNotificationClientId($agencyNotificationClientId)
    {
        $this->agencyNotificationClientId = $agencyNotificationClientId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAgencyNotificationClientHash()
    {
        return $this->agencyNotificationClientHash;
    }

    /**
     * @param mixed $agencyNotificationClientHash
     * @return AgencyUpdateMessage
     */
    public function setAgencyNotificationClientHash($agencyNotificationClientHash)
    {
        $this->agencyNotificationClientHash = $agencyNotificationClientHash;
        return $this;
    }



}