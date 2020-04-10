<?php

namespace EventServiceLib\Message\Identity;

use EventServiceLib\Message\AbstractMessage;

class ChangeUserRolesMessage extends AbstractMessage
{
    protected $userId; // elamaId
    protected $deletedRoles;
    protected $addedRoles;

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
     * @return array
     */
    public function getDeletedRoles()
    {
        return $this->deletedRoles;
    }

    /**
     * @param array $deletedRoles
     * @return ChangeUserRolesMessage
     */
    public function setDeletedRoles($deletedRoles)
    {
        $this->deletedRoles = $deletedRoles;

        return $this;
    }

    /**
     * @return array
     */
    public function getAddedRoles()
    {
        return $this->addedRoles;
    }

    /**
     * @param array $addedRoles
     * @return ChangeUserRolesMessage
     */
    public function setAddedRoles($addedRoles)
    {
        $this->addedRoles = $addedRoles;

        return $this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
                [
                    $this->userId,
                ]
            ) &&
            (!$this->hasEmpty([$this->deletedRoles]) || !$this->hasEmpty([$this->addedRoles]));
    }
}
