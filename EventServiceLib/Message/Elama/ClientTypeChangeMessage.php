<?php declare(strict_types=1);

namespace EventServiceLib\Message\Elama;

use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\ProjectSpecificMessageInterface;
use EventServiceLib\Message\Traits\ArrayEmailTrait;
use EventServiceLib\Message\Traits\LocalizationTrait;

class ClientTypeChangeMessage extends AbstractMessage implements ProjectSpecificMessageInterface
{

    use ArrayEmailTrait;
    use LocalizationTrait;

    const CLIENT_TYPE_SS = 'self_service';
    const CLIENT_TYPE_SA = 'sub_agency';

    protected $clientType;
    protected $elamaId;

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
            $this->email
        ]);
    }

    public function getProjectIdentity()
    {
        return 'Elama';
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