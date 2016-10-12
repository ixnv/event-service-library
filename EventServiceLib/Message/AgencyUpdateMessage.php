<?php


namespace EventServiceLib\Message;


use EventServiceLib\Message\Traits\ArrayEmailTrait;
use EventServiceLib\Message\Traits\GetresponseMessageTrait;

class AgencyUpdateMessage extends AbstractMessage
{

    use GetresponseMessageTrait;
    use ArrayEmailTrait;

    protected $agencyNotificationClientId;
    protected $agencyNotificationClientHash;

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


    function isValid()
    {
        return parent::isValid() && !empty($this->agencyNotificationClientHash) && !empty($this->agencyNotificationClientId);
    }


}