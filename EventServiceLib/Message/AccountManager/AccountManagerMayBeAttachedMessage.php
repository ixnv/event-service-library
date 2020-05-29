<?php

namespace EventServiceLib\Message\AccountManager;

use EventServiceLib\Message\AbstractMessage;

final class AccountManagerMayBeAttachedMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'accountManagerMayBeAttached';

    private $elamaId;
    private $email;

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

    /**
     * @return int
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

    /**
     * @param int $elamaId
     * @return AccountManagerMayBeAttachedMessage
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
}
