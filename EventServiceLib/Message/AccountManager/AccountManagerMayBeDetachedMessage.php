<?php

namespace EventServiceLib\Message\AccountManager;

use EventServiceLib\Message\AbstractMessage;

class AccountManagerMayBeDetachedMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'accountManagerMayBeDetached';

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
     * @return AccountManagerMayBeDetachedMessage
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
     * @return AccountManagerMayBeDetachedMessage
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
        return self::EVENT_IDENTITY;
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
