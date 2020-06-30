<?php

namespace EventServiceLib\Message\Tasks;

use EventServiceLib\Message\AbstractMessage;

final class TaskChangeStatusMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'taskChangeStatus';

    const STATUS_DONE = 'done';
    const STATUS_UNDONE = 'undone';

    private $status;
    private $tasksCount; // total count for status and current user
    private $userId;

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->userId,
                $this->status,
                $this->tasksCount
            ]
        );
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return TaskChangeStatusMessage
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
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
     * @return TaskChangeStatusMessage
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
     * @return TaskChangeStatusMessage
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }
}
