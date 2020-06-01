<?php

namespace EventServiceLib\Message\AccountManager;

use EventServiceLib\Message\AbstractMessage;

final class AccountManagerMayBeDetachedMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'accountManagerMayBeDetached';

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
}
