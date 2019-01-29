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

    /**
     * @return string
     */
    public function getClientType()
    {
        return $this->clientType;
    }

    /**
     * @param string $clientType
     * @return $this
     */
    public function setClientType($clientType)
    {
        $this->clientType = $clientType;

        return $this;
    }

    /**
     * @return string
     */
    public function getEventIdentity()
    {
        return 'clientTypeChange';
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty([
            $this->clientType,
            $this->email
        ]);
    }

    /**
     * @return string
     */
    public function getProjectIdentity()
    {
        return 'Elama';
    }

    /**
     * @return string
     */
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