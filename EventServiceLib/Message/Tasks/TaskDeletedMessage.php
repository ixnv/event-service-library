<?php

namespace EventServiceLib\Message\Tasks;

use EventServiceLib\Message\AbstractMessage;

final class TaskDeletedMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'taskDeleted';

    private $tasksCount; // total count for current user
    private $userId;

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->userId,
                $this->tasksCount
            ]
        );
    }

    /**
     * @return int
     */
    public function getTasksCount()
    {
        return $this->tasksCount;
    }

    /**
     * @param int $tasksCount
     * @return TaskDeletedMessage
     */
    public function setTasksCount($tasksCount)
    {
        $this->tasksCount = $tasksCount;
        return $this;
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
     * @return TaskDeletedMessage
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }
}
