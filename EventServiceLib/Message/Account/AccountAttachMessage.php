<?php

namespace EventServiceLib\Message\Account;

use EventServiceLib\Message\AbstractMessage;

final class AccountAttachMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'accountAttach';

    private $elamaId;
    private $advSystem;
    private $accountType;
    private $email;
    private $place;
    private $accountExternalId; // id в рекламной системе. В директе это e-16650259, в гугле 4198728223

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->elamaId,
                $this->accountType,
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
     * @return AccountAttachMessage
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
     * @return AccountAttachMessage
     */
    public function setAdvSystem($advSystem)
    {
        $this->advSystem = $advSystem;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     * @return AccountAttachMessage
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return AccountAttachMessage
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param string $place
     * @return AccountAttachMessage
     */
    public function setPlace($place)
    {
        $this->place = $place;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountExternalId()
    {
        return $this->accountExternalId;
    }

    /**
     * @param string $accountExternalId
     * @return AccountAttachMessage
     */
    public function setAccountExternalId($accountExternalId)
    {
        $this->accountExternalId = $accountExternalId;
        return $this;
    }
}
