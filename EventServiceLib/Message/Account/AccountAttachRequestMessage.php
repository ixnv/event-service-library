<?php

namespace EventServiceLib\Message\Account;

use EventServiceLib\Message\AbstractMessage;

final class AccountAttachRequestMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'accountAttachRequest';

    private $elamaId;
    private $advSystem;
    private $requestStatus;

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->elamaId,
                $this->requestStatus,
                $this->advSystem
            ]
        );
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
     * @return AccountAttachRequestMessage
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdvSystem()
    {
        return $this->advSystem;
    }

    /**
     * @param string $advSystem
     * @return AccountAttachRequestMessage
     */
    public function setAdvSystem($advSystem)
    {
        $this->advSystem = $advSystem;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestStatus()
    {
        return $this->requestStatus;
    }

    /**
     * @param string $requestStatus
     * @return AccountAttachRequestMessage
     */
    public function setRequestStatus($requestStatus)
    {
        $this->requestStatus = $requestStatus;
        return $this;
    }
}
