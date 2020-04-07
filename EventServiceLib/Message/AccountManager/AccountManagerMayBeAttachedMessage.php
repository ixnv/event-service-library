<?php

namespace EventServiceLib\Message\AccountManager;

use EventServiceLib\Message\AbstractMessage;

class AccountManagerMayBeAttachedMessage extends AbstractMessage
{

    protected $elamaId;
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
     * @return $this
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return AccountManagerMayBeAttachedMessage
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
        return 'accountManagerMayBeAttached';
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->elamaId,
            ]
        );
    }

}