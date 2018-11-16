<?php declare(strict_types=1);

namespace EventServiceLib\Message\Elama;

use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\Traits\ArrayEmailTrait;
use EventServiceLib\Message\Traits\CountryTrait;
use EventServiceLib\Message\Traits\GetresponseMessageTrait;

class ClientTypeChangeMessage extends AbstractMessage
{

    use ArrayEmailTrait;
    use CountryTrait;

    const CLIENT_TYPE_SS = 'self_service';
    const CLIENT_TYPE_SA = 'sub_agency';

    private $clientType;
    private $elamaId;

    public function getClientType()
    {
        return $this->clientType;
    }

    public function setClientType($clientType)
    {
        $this->clientType = $clientType;

        return $this;
    }

    public function getEventIdentity()
    {
        return 'clientTypeChange';
    }

    public function isValid()
    {
        return !$this->hasEmpty([
            $this->clientType,
            $this->email,
            $this->country
        ]);
    }

    public function getProjectPossession()
    {
        return 'Elama';
    }

    /**
     * @return int
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

    /**
     * @param int $elamaId
     * @return ClientTypeChangeMessage
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;

        return $this;
    }

}