<?php

namespace EventServiceLib\Message\Account;

use EventServiceLib\Message\AbstractMessage;

class AccountAttachMessage extends AbstractMessage
{

    protected $elamaId;
    protected $advPlatform;
    protected $email;
    protected $isExternal = false;

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
    public function getAdvPlatform()
    {
        return $this->advPlatform;
    }

    /**
     * @param string $advPlatform
     * @return AccountAttachMessage
     */
    public function setAdvPlatform($advPlatform)
    {
        $this->advPlatform = $advPlatform;

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
     * @return bool
     */
    public function isExternal()
    {
        return $this->isExternal;
    }

    /**
     * @param bool $isExternal
     * @return AccountAttachMessage
     */
    public function setIsExternal($isExternal)
    {
        $this->isExternal = $isExternal;

        return $this;
    }


    /**
     * @return string
     */
    function getEventIdentity()
    {
        return 'accountAttachTrial';
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty([
            $this->elamaId,
            $this->advPlatform
        ]);
    }

}