<?php

namespace EventServiceLib\Message\Tasks;

use EventServiceLib\Message\AbstractMessage;

final class NewEmployeeCreatedMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'newEmployeeCreated';

    private $userId;

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->userId
            ]
        );
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
     * @return NewEmployeeCreatedMessage
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }
}
