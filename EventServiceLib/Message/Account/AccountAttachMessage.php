<?php

namespace EventServiceLib\Message\Account;

use EventServiceLib\Message\AbstractMessage;

class AccountAttachMessage extends AbstractMessage
{

    protected $elamaId;
    protected $advSystem;
    protected $accountType;
    protected $email;

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
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
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
    function getEventIdentity()
    {
        return 'accountAttach';
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty([
            $this->elamaId,
            $this->accountType,
            $this->advSystem
        ]);
    }
}
