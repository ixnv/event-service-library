<?php

namespace EventServiceLib\Message\Identity;

use EventServiceLib\Message\AbstractMessage;

class ChangeUserRolesMessage extends AbstractMessage
{
    protected $userId; // elamaId
    protected $email;
    protected $oldRoles;
    protected $newRoles;

    /**
     * @return string
     */
    public function getEventIdentity()
    {
        return 'changeUserRoles';
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return ChangeUserRolesMessage
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

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
     * @return ChangeUserRolesMessage
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return array
     */
    public function getOldRoles()
    {
        return $this->oldRoles;
    }

    /**
     * @param array $oldRoles
     * @return ChangeUserRolesMessage
     */
    public function setOldRoles($oldRoles)
    {
        $this->oldRoles = $oldRoles;

        return $this;
    }

    /**
     * @return array
     */
    public function getNewRoles()
    {
        return $this->newRoles;
    }

    /**
     * @param array $newRoles
     * @return ChangeUserRolesMessage
     */
    public function setNewRoles($newRoles)
    {
        $this->newRoles = $newRoles;

        return $this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty([
            $this->email,
            $this->userId,
        ]);
    }
}
